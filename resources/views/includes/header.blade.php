<div class="lx-header">
    <div class="lx-header-content">
        <div class="lx-header-mobile">
            <i class="material-icons">menu</i>
        </div>
        <div class="lx-header-logo">
            <a href="/">Tiger Point</a>
        </div>
        <div class="lx-menu">
            <div class="lx-menu-list">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/about">About Me</a></li>
                    <li><a href="/collections">Collection</a></li>
                    <li><a href="/categories">Categories</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    @auth
                        <!-- Show admin dashboard if authenticated user is admin else show user dashboard -->
                        @if(auth()->user()->role == 'admin')
                            <li><a href="/admin/dashboard">Dashboard</a></li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                        @elseif (auth()->user()->role == 'user')
                            <li><a href="/user/profile">Profile</a></li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                        @endif
                    @else
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="lx-search-btn">
            <i class="material-icons">search</i>
        </div>

        <div class="lx-header-search">
            @include('includes.search')
        </div>
        <div class="lx-clear-fix"></div>
    </div>
</div>