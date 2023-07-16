<!-- Create a beautiful email template, for sending email verification otp, use bootstrap for styling, otp will be genrated in UserController.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Email Verification</h4>
                    </div>
                    <div class="card-body">
                        <p>Hi {{ auth()->user()->name }}</p>
                        <p>Your email verification otp is <strong>{{ session('otp') }}</strong></p>
                        <p>Thanks</p>
                    </div>
                </div>
            </div>
        </div>
</body>@extends('admin.layout')
@section('content')
</html>