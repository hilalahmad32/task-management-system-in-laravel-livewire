<nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
    <a class="navbar-brand" href="index.html">Task management System</a>
    <button class="btn btn-link btn-sm order-1  " id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if (Auth::guard('admin')->user())
                    {{ Auth::guard('admin')->user()->username }}
                @else
                    {{ Auth::user()->fname }}
                    {{ Auth::user()->lname }}
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                @if (Auth::guard('admin')->user())
                    <a class="dropdown-item" href="{{ route('admin.changePassword') }}">Change Password</a>
                    <a class="dropdown-item" href="{{ route('admin.updateProfile') }}">Edit Profile</a>
                @endif
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
