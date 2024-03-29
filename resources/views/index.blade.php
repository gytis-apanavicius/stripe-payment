<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

<script src="https://js.stripe.com/v3/"></script>

<form action="api/charge" method="post" id="payment-form">
    <div class="form-row">
        <label for="card-element">
            Credit or debit card
        </label>
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
</form>

<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>