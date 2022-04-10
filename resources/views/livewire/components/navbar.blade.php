<nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
    <a class="navbar-brand" href="index.html">Task management System</a>
    <button class="btn btn-link btn-sm order-1  " id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Hi Admin</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Change Password</a>
                <div class="dropdown-divider"></div>
                @if (!Auth::guard('admin')->user())
                    @livewire('user.auth.logout')
                @else
                    @livewire('admin.auth.logout')
                @endif

            </div>
        </li>
    </ul>
</nav>
