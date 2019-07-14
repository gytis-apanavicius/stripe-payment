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

@yield('content')

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

</body>
</html>