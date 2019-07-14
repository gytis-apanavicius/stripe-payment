<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/success', function () {
    session_start();
    if (array_key_exists('filename', $_SESSION)) {
        $filename = $_SESSION['filename'];
        //remove filename from session, so that user wouldn't be able to open success page
        unset($_SESSION['filename']);
        return view('success', ['filename' => base_path('storage/app') . '/' . $filename]);
    } else
        return redirect('/');
});

Route::get('/payment_error', function () {
    return view('error_payment');
});