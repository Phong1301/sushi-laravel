<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo image">
            Sushi
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>

                <li class="nav__item">
                    <a href="#about" class="nav__link">About</a>
                </li>

                <li class="nav__item">
                    <a href="#popular" class="nav__link">Popular</a>
                </li>

                <li class="nav__item">
                    <a href="#recently" class="nav__link">Rencently</a>
                </li>
                
            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>

            <img src="{{asset('assets/img/leaf-branch-4.png')}}" class="nav__img-1" alt="nav image">
            <img src="{{asset('assets/img/leaf-branch-3.png')}}" class="nav__img-2" alt="nav image">
        </div>

        <div class="nav__cart" id="nav-cart">

            @if(session('loggedInUser'))
            
                @foreach ( $cartItems as $item )
                    <div class="cart__item">
                        <img src="{{ asset('assets/img/'. $item->products->image ) }}" class="cart__img" alt="">
                        
                        <div class="cart__text">
                            <h3 class="cart__name">{{ $item->products->name }}</h3>
                            <span class="cart__description">{{ $item->products->description }}</span>
                            <span class="cart__price">${{ $item->products->price }}</span>
                            <div class="cart__action">
                                <div class="cart__count">
                                    <div class="cart__count-button">-</div>
                                    <div class="cart__count-number">{{ $item->prod_qty }}</div>
                                    <div class="cart__count-button">+</div>
                                </div>
                                <div class="cart__remove">
                                    <i class="ri-delete-bin-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
            @endif

            <div class="cart__total">
                <span class="cart__total-text">Total:</span>
                <span class="cart__total-price">3</span>
            </div>

            <div class="cart__checkout">
                Check Out
            </div>
        </div>

        <div class="nav__buttons">

            @if (session('loggedInUser'))
                <div class="nav__icon" id="icon-signin">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>
            @else
                <div class="nav__icon" id="icon-signin">
                    <i class="ri-user-line icon"></i>
                    <span class="tooltipText">Sign In</span>
                </div>
            @endif

            <div class="nav__icon">
                <i class="ri-star-line icon"></i>
                <span class="tooltipText">My Wish List</span>
                <span class="count">5</span>
            </div>

            <div class="nav__icon" id="nav-shop">
                <i class="ri-shopping-bag-line icon"></i>
                <span class="tooltipText">My Cart</span>
                <span class="count">5</span>
            </div>

            <!-- Theme change button -->
            <div class="nav__icon">
                <i class="ri-moon-line icon theme-button" id="theme-button"></i>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-2-line"></i>
            </div>
        </div>
    </nav>
</header>