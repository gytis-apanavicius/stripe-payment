@extends('message_layout')
@section('content')
    <div class="container msg-box box-success">
        <h2><i class="far fa-check-circle"></i>Success!</h2>
        <hr>
        <p>Your test payment with Stripe payment Gateway was successful. Information about this payment was saved
        in a file:</p>
        <p>{{ $filename }}</p>
    </div>
@endsection