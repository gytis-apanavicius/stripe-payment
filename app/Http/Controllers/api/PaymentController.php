<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    const STRIPE_PAYMENT_URL = 'https://api.stripe.com/v1/charges';
    const STRIPE_SECRET_KEY = 'sk_test_slezupO7CjZyXfjAFmEY8L0H';

    public function checkoutAction(Request $request)
    {
        $stripe_token = $request->get('stripeToken');

        //false test params - only used for testing.
        $test_params = [
            'amount' => 50,
            'currency' => 'eur',
            'description' => 'Test Payment',
            'source' => $stripe_token
        ];

        $client = new Client();
        $response = $client->post(self::STRIPE_PAYMENT_URL,
            [
                'auth' => [self::STRIPE_SECRET_KEY, ''],
                'form_params' => $test_params,
            ]);

        $response_status = $response->getStatusCode();

        if ($response_status != 200)
        {
            //something is wrong with payment - redirect to bad payment page.
        }

        $this->logStripePaymentToFile($response);


    }

    /**
     * Logs cURL response for Stripe payment to file.
     * Filename structure for logFile Y-m-d_H:i:s_{payment_id}
     * @param $response Response that was gotten from cURL request. Contains all necessary data that needs to be
     * outputted to log file.
     * @return filename of outputted file. File is stored in {project_root}/storage/app/stripe_payment_logs/ folder.
     */
    public function logStripePaymentToFile($response)
    {
        $current_time = date('Y-m-d_H:i:s');
        $formed_array = $this->formStripePaymentResponseData($response);
        $file_name = 'stripe_payment_logs/'.$current_time.'_'.$formed_array['id'].'.txt';
        Storage::disk('local')->put($file_name, print_r($formed_array,true));
        return $file_name;
    }

    public function formStripePaymentResponseData($response)
    {
        $decoded_response = json_decode($response->getBody()->getContents());

        //taking only needed values
        return [
            'id' => $decoded_response->id,
            'object' => $decoded_response->object,
            'amount' => $decoded_response->amount,
            'currency' => $decoded_response->currency,
            'description' => $decoded_response->description,
            'paid' => $decoded_response->paid,
        ];
    }


}
