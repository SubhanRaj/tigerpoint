@extends('admin.layout')
@section('content')
<div class="position-relative overflow-hidden radial-gradient min-vh-100">
    <div class="position-relative z-index-5">
        <div class="row">
            <div class="col-lg-6 col-xl-8 col-xxl-9">
                <a href="/register" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                    <img src="/" width="180" alt="">
                    <i class="ti ti-arrow-left"></i>
                    Tigerpoint
                </a>
                <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                    <img src="{{asset('images/admin/backgrounds/login-security.svg')}}" alt="" class="img-fluid" width="500">
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                    <div class="d-flex align-items-center w-100 h-100">
                        <div class="card-body">
                            <div class="mb-5">
                                <h3 class="fw-bolder fs-7 mb-3">Two Step Verification</h3>
                                <p>We sent a verification code to following email address. Enter the code from the email to verify your account.</p>
                                <h6 class="fw-bolder">{{session('email') ?? 'test@example.com'}}</h6>
                            </div>
                            <form>
                                @csrf
                                <div class="mb-3">
                                    <label for="email-otp" class="form-label fw-semibold">Enter 6 digit OTP</label>
                                    <div class="d-flex align-items-center gap-2 gap-sm-3">
                                        <input type="number" name="otp-digit-1" id="otp-digit-1" class="form-control" placeholder="1" maxlength="1">
                                        <input type="number" name="otp-digit-2" id="otp-digit-2" class="form-control" placeholder="2" maxlength="1">
                                        <input type="number" name="otp-digit-3" id="otp-digit-3" class="form-control" placeholder="3" maxlength="1">
                                        <input type="number" name="otp-digit-4" id="otp-digit-4" class="form-control" placeholder="4" maxlength="1">
                                        <input type="number" name="otp-digit-5" id="otp-digit-5" class="form-control" placeholder="5" maxlength="1">
                                        <input type="number" name="otp-digit-6" id="otp-digit-6" class="form-control" placeholder="6" maxlength="1">
                                    </div>
                                </div>
                                <a href="" class="btn btn-primary w-100 py-8 mb-4">Verify My Account</a>
                            </form>
                            <div class="d-flex align-items-center">
                                <p class="fs-4 mb-0 text-dark">Didn't get the code?</p>
                                <a class="text-primary fw-medium ms-2" href="">Resend</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection