<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion bg-secondary sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                @if (!Auth::guard('admin')->user())
                    <a class="nav-link" href="{{ route('users.tasks') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Tasks
                    </a>
                @else
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="{{ route('admin.category') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Category
                    </a>
                    <a class="nav-link" href="{{ route('admin.tasks') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Tasks
                    </a>
                    <a class="nav-link" href="{{ route('admin.users') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        User
                    </a>
            </div>
            @endif

        </div>
        <div class="sb-sidenav-footer bg-secondary">
            <div class="small">Logged in as:</div>
            @if (Auth::guard('admin')->user())
                {{ Auth::guard('admin')->user()->username }}
            @else
                {{ Auth::user()->fname }}
                {{ Auth::user()->lname }}
            @endif
            @auth

            @endauth
        </div>
    </nav>
</div>
