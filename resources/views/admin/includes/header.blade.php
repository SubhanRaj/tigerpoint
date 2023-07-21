<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="ti ti-search"></i>
                </a>
            </li>
            @endif
        </ul>
        <div class="d-block d-lg-none">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo" width="180" alt="" />
        </div>
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
            @if (auth()->user()->role == 'admin')
            @include('admin.includes.notification')
            @endif
            @include('admin.includes.profile')
        </ul>

    </nav>
</header>