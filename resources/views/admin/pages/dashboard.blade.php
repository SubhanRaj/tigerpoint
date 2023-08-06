@extends('admin.layout')
@section('title')
{{'Dashboard'}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center gap-4 mb-4">
                <div class="position-relative">
                    <div class="border border-2 border-primary rounded-circle">
                        <img src="{{asset('images/admin/profile/user-1.jpg')}}" class="rounded-circle m-1" alt="user1" width="60" />
                    </div>
                    <!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"> 3 <span class="visually-hidden">unread messages</span> --> </span>
                </div>
                <div>
                    <h3 class="fw-semibold">Hi, <span class="text-dark">{{ auth()->user()->name}}</span></h3>
                    <span>Cheers, and happy activities -{{ date('F d, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card rounded-3 card-hover border-bottom border-info">
                        <a href="/admin/manage-posts" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h2 class="fs-7">
                                        {{DB::table('posts')->count()}}
                                    </h2>
                                    <h6 class="fw-medium text-info mb-0">Total Posts</h6>
                                </div>
                                <div class="ms-auto">
                                    <span class="text-info display-6"><i class="ti ti-article"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card rounded-3 card-hover border-bottom border-success">
                        <a href="/admin/manage-users" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h2 class="fs-7">
                                        {{DB::table('users')->count()}}
                                    </h2>
                                    <h6 class="fw-medium text-info mb-0">Current Users</h6>
                                </div>
                                <div class="ms-auto">
                                    <span class="text-info display-6"><i class="ti ti-users"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    @endsection