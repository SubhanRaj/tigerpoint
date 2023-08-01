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
</div>
@endsection