@extends('admin.layout')
@section('content')
<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">My Profile</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="/admin/dashbaord">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{asset('images/admin/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                    <i class="ti ti-user-circle me-2 fs-6"></i>
                    <span class="d-none d-md-block">Account</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
                    <i class="ti ti-lock me-2 fs-6"></i>
                    <span class="d-none d-md-block">Security</span>
                </button>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Profile</h5>
                                    <p class="card-subtitle mb-4">Change your profile picture from here</p>
                                    <div class="text-center">
                                        <img src="{{asset('images/admin/profile/user-1.jpg')}}" alt="" class="img-fluid rounded-circle" width="120" height="120">
                                        <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                            <button class="btn btn-primary">Upload</button>
                                            <button class="btn btn-outline-danger">Reset</button>
                                        </div>
                                        <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Password</h5>
                                    <p class="card-subtitle mb-4">To change your password please confirm here</p>
                                    <form>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Current Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your current password">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">New Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your new password">
                                        </div>
                                        <div class="">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm your new password">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card w-100 position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Personal Details</h5>
                                    <p class="card-subtitle mb-4">To change your personal detail , edit and save from here</p>
                                    <form method="post" action="/admin/update-user-details">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="name" class="form-label fw-semibold">Your Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{auth()->user()->name}}">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="city" class="form-label fw-semibold">City</label>
                                                    <input type="text" class="form-control" id="city" name="city" value="{{auth()->user()->city}}" placeholder="Enter your city">
                                                    @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="position" class="form-label fw-semibold">Current Position</label>
                                                    <input type="text" class="form-control" id="position" name="position" value="{{auth()->user()->position}}" placeholder="Enter your current position">
                                                    @error('position')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="email" class="form-label fw-semibold">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="countyr" class="form-label fw-semibold">Country</label>
                                                    <input type="text" class="form-control" id="country" name="country" value="{{auth()->user()->country}}" placeholder="Enter your country">
                                                    @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="phone" class="form-label fw-semibold">Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+91 12345 65478">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="">
                                                    <label for="address" class="form-label fw-semibold">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="814 Howard Street, 120065, India">
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                                    <input type="submit" value=" Save " class="btn btn-primary">
                                                    <input type="reset" value="Cancel" class="btn btn-light-danger text-danger">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Two-factor Authentication</h4>
                                    <div class="d-flex align-items-center justify-content-between pb-7">
                                        <p class="mb-0">By enabling 2FA, you add an extra layer of security to your account. You will be asked to enter an additional security code when you log in or make changes to your account.</p>
                                        <button class="btn btn-primary m-1">Enable</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Authentication App</h5>
                                            <p class="mb-0">Google auth app</p>
                                        </div>
                                        <button class="btn btn-light-primary text-primary">Setup</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Another e-mail</h5>
                                            <p class="mb-0">E-mail to send verification link</p>
                                        </div>
                                        <button class="btn btn-light-primary text-primary">Setup</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">SMS Recovery</h5>
                                            <p class="mb-0">Your phone number or something</p>
                                        </div>
                                        <button class="btn btn-light-primary text-primary">Setup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="bg-light rounded-1 p-6 d-inline-flex align-items-center justify-content-center mb-3">
                                        <i class="ti ti-device-laptop text-primary d-block fs-7" width="22" height="22"></i>
                                    </div>
                                    <h5 class="fs-5 fw-semibold mb-0">Devices</h5>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem.</p>
                                    <button class="btn btn-primary mb-4">Sign out from all devices</button>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="ti ti-device-mobile text-dark d-block fs-7" width="26" height="26"></i>
                                            <div>
                                                <h5 class="fs-4 fw-semibold mb-0">iPhone 14</h5>
                                                <p class="mb-0">London UK, Oct 23 at 1:15 AM</p>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="ti ti-device-laptop text-dark d-block fs-7" width="26" height="26"></i>
                                            <div>
                                                <h5 class="fs-4 fw-semibold mb-0">Macbook Air</h5>
                                                <p class="mb-0">Gujarat India, Oct 24 at 3:15 AM</p>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                    </div>
                                    <button class="btn btn-light-primary text-primary w-100 py-1">Need Help ?</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-light-danger text-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection