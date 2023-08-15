<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- Show only if user role is admin -->
                @if (Auth::user()->role == 'admin')
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-grid-dots"></i>
                        </span>
                        <span class="hide-menu">Dashbaord</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Create</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/upload-photo" aria-expanded="false">
                        <span>
                            <i class="ti ti-photo-plus"></i>
                        </span>
                        <span class="hide-menu">Add New Image</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/new-blog" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-pencil"></i>
                        </span>
                        <span class="hide-menu">Write New Blog</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-pencil"></i>
                        </span>
                        <span class="hide-menu">Create New Gallery</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-bookmark"></i>
                        </span>
                        <span class="hide-menu">Create New Collection</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-category"></i>
                        </span>
                        <span class="hide-menu">Create New Category</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Manage</span>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-photo-up"></i>
                        </div>
                        <span class="hide-menu">Image Uploads</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/admin/manage-posts" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-article"></i>
                        </div>
                        <span class="hide-menu">Blog Posts</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-album"></i>
                        </div>
                        <span class="hide-menu">Gallery</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-database"></i>
                        </div>
                        <span class="hide-menu">Collections</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-category"></i>
                        </div>
                        <span class="hide-menu">Categories</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-users"></i>
                        </div>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-mail"></i>
                        </span>
                        <span class="hide-menu">Email</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Send Newsletter</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Other Option</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/profile" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">My Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{url ('/logout')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-logout"></i>
                        </span>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>
                @elseif (Auth::user()->role == 'user')
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">User Profile</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/user/profile" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">My Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{url ('/logout')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-logout"></i>
                        </span>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>
                @endif
                <!-- <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-edit"></i>
                        </span>
                        <span class="hide-menu">Edit</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Posts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Collections</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#l" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->