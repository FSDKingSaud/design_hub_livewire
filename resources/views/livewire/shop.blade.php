@section('main')
    <section class="main__shop shop">
        <div class="container">
            <h1 class="shop__title title">
                Shop
            </h1>
            <div class="shop__filters-panel filters-panel">
                <p class="filters-panel__text">
                    Showing 10–18 of 35 results
                </p>
                <form class="filters-panel__form filters-panel-form" action="#">
                    <div class="filters-panel-form__range filters-panel-form-range">
                        <p class="filters-panel-form-range__text">
                            Price:
                        </p>
                        <input class="filters-panel-form-range__input" type="text" value="$10">
                        <p class="filters-panel-form-range__text">
                            —
                        </p>
                        <input class="filters-panel-form-range__input" type="text" value="$120">
                    </div>
                    <div class="filters-panel-form__select custom-select">
                        <select>
                            <option value="0">Select a Category</option>
                            <option value="1">Select a Category</option>
                            <option value="2">Select a Category 2</option>
                        </select>
                    </div>
                    <div class="filters-panel-form__select custom-select">
                        <select>
                            <option value="0">Default Sorting</option>
                            <option value="1">Default Sorting</option>
                            <option value="2">Default Sorting 2</option>
                        </select>
                    </div>
                    <div class="filters-panel-form__search search">
                        <button class="search__btn" type="button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4182 19 19 15.4183 19 11C19 6.58172 15.4182 3 11 3C6.58169 3 2.99997 6.58172 2.99997 11C2.99997 15.4183 6.58169 19 11 19Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 21L16.65 16.65" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <input class="search__input" type="text" placeholder="Search...">
                    </div>
                </form>
            </div>
            <div class="shop__inner">
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-2.jpg" alt="img">
                            <p class="card-box__poster-suptext">
                                sale
                            </p>
                        </a>
                        <p class="card__subtext">
                            Accessories
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Body Cream
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $16 – $30
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-1.jpg" alt="img">
                            <p class="card-box__poster-suptext">
                                sale
                            </p>
                        </a>
                        <p class="card__subtext">
                            Accessories
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Clock
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">
                                $22
                            </del>
                            <ins class="card-price__current">
                                $18
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-3.jpg" alt="img">
                        </a>
                        <p class="card__subtext">
                            Clothes
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Magazine
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $94
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-4.jpg" alt="img">
                            <p class="card-box__poster-suptext">
                                sale
                            </p>
                        </a>
                        <p class="card__subtext">
                            Decor
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Coffee Cup
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">
                                $30
                            </del>
                            <ins class="card-price__current">
                                $25
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-5.jpg" alt="img">
                            <p class="card-box__poster-suptext card-box__poster-suptext--pink">
                                new
                            </p>
                        </a>
                        <p class="card__subtext">
                            Clothes
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            T-Shirt
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $153
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-6.jpg" alt="img">
                        </a>
                        <p class="card__subtext">
                            Accessories
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Fashion Bag
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $45 – $55
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-7.jpg" alt="img">
                        </a>
                        <p class="card__subtext">
                            Clothes
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Eco Shopper
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $63
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-8.jpg" alt="img">
                            <p class="card-box__poster-suptext">
                                sale
                            </p>
                        </a>
                        <p class="card__subtext">
                            Accessories
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Bath Decor
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $7
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <div class="shop__card card card--shop">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('product') }}">
                            <img class="card-box__poster-img" src="images/shop-img-9.jpg" alt="img">
                            <p class="card-box__poster-suptext card-box__poster-suptext--pink">
                                new
                            </p>
                        </a>
                        <p class="card__subtext">
                            Decor
                        </p>
                        <a class="card__title" href="{{ route('product') }}">
                            Bottle
                        </a>
                        <div class="card__price card-price">
                            <del class="card-price__past">

                            </del>
                            <ins class="card-price__current">
                                $108
                            </ins>
                        </div>
                        <a class="card__link" href="{{ route('product') }}">
                            Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="shop__paging paging">
                <p class="paging__text">
                    Showing 10–18 of 35 results
                </p>
                <ul class="paging__list">
                    <li class="paging__list-item">
                        <a class="paging__list-link paging__list-link--back" href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.66663 4L12.1952 7.5286C12.4556 7.78894 12.4556 8.21106 12.1952 8.4714L8.66663 12M4.66663 4L8.19522 7.5286C8.45557 7.78894 8.45557 8.21106 8.19522 8.4714L4.66663 12"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            1
                        </a>
                    </li>
                    <li class="paging__list-item">
                        <p class="paging__list-text">
                            2
                        </p>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            3
                        </a>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.66663 4L12.1952 7.5286C12.4556 7.78894 12.4556 8.21106 12.1952 8.4714L8.66663 12M4.66663 4L8.19522 7.5286C8.45557 7.78894 8.45557 8.21106 8.19522 8.4714L4.66663 12"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

<span></span>
