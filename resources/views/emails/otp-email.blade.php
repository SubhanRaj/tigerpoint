<!-- Create a beautiful email template, for sending email verification otp, use bootstrap for styling, otp will be genrated in UserController.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* google font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
        p {
            font-size: 1.1rem;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Email Verification</h2>
                    </div>
                    <div class="card-body">
                        <p>Hi {{ auth()->user()->name}},</p>
                        <p>We are glad to have you on board.<br>In order to complete your registration, please enter the following OTP on the verification page.</p>
                        <h3 class="text-center" aria-labelledby="Email Verification OTP">{{ session('otp') }}</h3>
                        <a class="btn btn-primary w-100 py-8 mb-4" href="">Verify My Account</a>
                        <p>Thanks</p>
                    </div>
                </div>
            </div>
        </div>
</body>@extends('admin.layout')
@section('content')

</html>