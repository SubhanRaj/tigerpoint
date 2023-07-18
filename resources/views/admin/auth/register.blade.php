@extends('admin.layout')
@section('content')
<div class="position-relative overflow-hidden radial-gradient min-vh-100">
    <div class="position-relative z-index-5">
        <div class="row">
            <div class="col-xl-7 col-xxl-8">
                <a href="/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                    <img src="" width="180" alt="">
                    <i class="ti ti-arrow-left"></i>
                    Tigerpoint
                </a>
                <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                    <img src="{{asset('images/admin/backgrounds/login-security.svg')}}" alt="" class="img-fluid" width="500">
                </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                    <div class="col-sm-8 col-md-6 col-xl-9">
                        <h2 class="mb-3 fs-7 fw-bolder">Welcome to Tiger Point</h2>
                        <p class=" mb-9">Please Register Yourself to Post or Comment</p>
                        <div class="row">
                            <div class="col-6 mb-2 mb-sm-0">
                                <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                                    <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                                    <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB
                                </a>
                            </div>
                        </div>
                        <div class="position-relative text-center my-4">
                            <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">or sign Up with</p>
                            <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                        </div>
                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="John Doe" aria-describedby="nameHelp" required>
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="johndoe@example.com" aria-describedby="emailHelp" required>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{$message}}</div>                                    
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" required>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{$message}}</div>                                    
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="confirmpassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="passwordHelp" required>
                                @error('password_confirmation')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>
                            <input type="submit" value="Sign Up" class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                        </form>
                        <div class="d-flex align-items-center">
                            <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                            <a class="text-primary fw-medium ms-2" href="/login">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection