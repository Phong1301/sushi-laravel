<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>

        <span class="logo_name">Sushi</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="#">
                <i class="uil uil-estate"></i>
                <span class="link-name">Dahsboard</span>
            </a></li>
            <li><a href="#">
                <i class="uil uil-user"></i>
                <span class="link-name">User</span>
            </a></li>
            <li><a href="#">
                <i class="uil uil-chart"></i>
                <span class="link-name">Products</span>
            </a></li>
            <li><a href="#">
                <i class="uil uil-chart"></i>
                <span class="link-name">Categories</span>
            </a></li>
        </ul>
        
        <ul class="logout-mode">
            @if (session('loggedInUser'))
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
            @endif
            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
                <span class="switch"></span>
            </div>
        </li>
        </ul>
    </div>
</nav>