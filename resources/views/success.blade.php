<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank You</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c34afe868.js"></script>

</head>
<body>

    <div class="container">
        <h2><span class="glyphicon glyphicon-search"></span>Success!</h2>
        <hr>
        <p>Your test payment with Stripe payment Gateway was successful. Information about this payment was saved
        in a file and can be accessed here</p>
    </div>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

</body>
</html>