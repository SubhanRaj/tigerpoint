<li class="nav-item dropdown">
    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
        <div class="d-flex align-items-center">
            <div class="user-profile-img">
                <img src="{{asset('images/admin/profile/user-1.jpg')}}" class="rounded-circle" width="35" height="35" alt="" />
            </div>
        </div>
    </a>
    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
        <div class="profile-dropdown position-relative" data-simplebar>
            <div class="py-3 px-7 pb-0">
                <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
            </div>
            <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                <img src="{{asset('images/admin/profile/user-1.jpg')}}" class="rounded-circle" width="80" height="80" alt="" />
                <div class="ms-3">
                    <h5 class="mb-1 fs-3">{{ auth()->user()->name ?? 'Guest' }} </h5>
                    <!-- <span class="mb-1 d-block text-dark">{{ auth()->user()->name ?? 'tester' }}</span> -->
                    <p class="mb-0 d-flex text-dark align-items-center gap-2">
                        <i class="ti ti-mail fs-4"></i>{{ auth()->user()->email ?? 'test@tigerpoint.in'}}
                    </p>
                </div>
            </div>
            <div class="message-body">
                <a href="/admin/user-profile" class="py-8 px-7 mt-8 d-flex align-items-center">
                    <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                        <img src="{{asset('images/admin/icons/icon-account.svg')}}" alt="" width="24" height="24">
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                        <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile </h6>
                        <span class="d-block text-dark">Account Settings</span>
                    </div>
                </a>
            </div>
            <div class="d-grid py-4 px-7 pt-8">
                <a href="{{url ('/logout')}}" class="btn btn-outline-primary">Log Out</a>
            </div>
        </div>
    </div>
</li>