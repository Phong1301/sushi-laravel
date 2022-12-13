<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <img src="{{asset('assets/img/home-sushi-rolls.png')}}" alt="home image" class="home__img">
            
            <div class="home__data">
                <h1 class="home__title">
                    Enjoy Delicious

                    <div>
                        <img src="{{asset('assets/img/home-sushi-title.png')}}" alt="home image">
                        Sushi Food
                    </div>
                </h1>

                <p class="home__description">
                    Enjoy a good dinner with the best dishes in 
                    the restaurant and improve your day
                </p>

                <a href="#" class="button">
                    Order Now <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>

        <img src="{{asset('assets/img/leaf-branch-2.png')}}" alt="home image" class="home__leaf-1">
        <img src="{{asset('assets/img/leaf-branch-4.png')}}" alt="home image" class="home__leaf-2">
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data">
                <span class="section__subtitle">About Us</span>
                <h2 class="section__title about__title">
                    <div>
                        We Provide
                        <img src="{{asset('assets/img/about-sushi-title.png')}}" alt="about image">
                    </div>

                    Healthy Food
                </h2>

                <p class="about__description">
                    Food comes to us from our relatives, whether they
                    have wings or roots. This is how we consider food,
                    it also has a culture. It has a history that passes
                    from generation to generation.
                </p>
            </div>

            <img src="{{asset('assets/img/about-sushi.png')}}" alt="about image" class="about__img">
        </div>

        <img src="{{asset('assets/img/leaf-branch-1.png')}}" alt="about image" class="about__leaf">
    </section>

    <!--==================== POPULAR ====================-->
    <section class="popular section" id="popular">
        <span class="section__subtitle">The Best Food</span>
        <h2 class="section__title">Popular Dishes</h2>

        <div class="popular__container container grid">
            @foreach ($product as $item)
                <article class="popular__card">
                    <input type="hidden" value="{{ $item->id }}" class="prod_id">
                    <img src="{{asset('assets/img/'.$item->image)}}" alt="popular image" class="popular__img">
                
                    <h3 class="popular__name">{{ $item->name }}</h3>
                    <span class="popular__description">{{ $item->description }}</span>

                    <span class="popular__price">${{ $item->price }}</span>
                    <button class="popular__button addToCartBtn">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
            @endforeach
        </div>
    </section>

    <!--==================== RECENTLY ====================-->
    <section class="recently section" id="recently">
        <div class="recently__container container grid">
            <div class="recently__data">
                <span class="section__subtitle">Recently Added</span>
                <h2 class="section__title">
                    Sushi Samurai <br>
                    Salmon Cheese
                </h2>

                <p class="recently__description">
                    Take a look at what's new. And do not deprive
                    yourself of a good meal, enjoy and be happy.
                </p>

                <a href="#" class="button">
                    Order Now <i class="ri-arrow-right-line"></i>
                </a>

                <img src="{{asset('assets/img/spinach-leaf.png')}}" alt="recently image" class="recently__data-img">
            </div>

            <img src="{{asset('assets/img/recently-salmon-sushi.png')}}" class="recently__img" alt="recently image">
        </div>

        <img src="{{asset('assets/img/leaf-branch-2.png')}}" alt="recently image" class="recently__leaf-1">
        <img src="{{asset('assets/img/leaf-branch-3.png')}}" alt="recently image" class="recently__leaf-2">
    </section>

    <!--==================== NEWSLETTER ====================-->
    <section class="newsletter section">
        <div class="newsletter__container container">
            <div class="newsletter__content grid">
                <img src="{{asset('assets/img/newsletter-sushi.png')}}" class="newsletter__img" alt="newsletter image">
            
                <div class="newsletter__data">
                    <span class="section__subtitle">Newsletter</span>
                    <h2 class="section__title">
                        Subscribe For <br>
                        Offer Updates
                    </h2>
                
                    <form action="" class="newsletter__form">
                        <input type="email" placeholder="Enter Email" class="newsletter__input">
                    
                        <button class="button newsletter__button">
                            Subscribe <i class="ri-send-plane-line"></i>
                        </button>
                    </form>
                </div>
            </div>

            <img src="{{asset('assets/img/spinach-leaf.png')}}" alt="newsletter image" class="newsletter__spinach">
        </div>
    </section>
</main>