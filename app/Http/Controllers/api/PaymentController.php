<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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


    }


}
