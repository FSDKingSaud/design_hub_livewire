@section('main')
    <section class="main__blog blog">
        <div class="container">
            <h1 class="blog__title title">
                Blog
            </h1>
            <div class="blog__filters-panel filters-panel">
                <p class="filters-panel__text">
                    Showing 1–8 of 35 results
                </p>
                <form class="filters-panel__form filters-panel-form" action="#">
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
                    <div class="filters-panel-form__select custom-select">
                        <select>
                            <option value="0">All Categories</option>
                            <option value="1">All Categories</option>
                            <option value="2">All Categories 2</option>
                        </select>
                    </div>
                    <div class="filters-panel-form__select custom-select">
                        <select>
                            <option value="0">Order by Date</option>
                            <option value="1">Order by Date</option>
                            <option value="2">Order by Date 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="blog__inner">
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-5.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            marketing
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            10 Things You Must Know About Art
                        </a>
                        <p class="card__description">
                            How do you design the kind of ecommerce site that will have products flying off your
                            virtual shelves?
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    5 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Valerie Fergusson
                                    <img class="card-list__link-img" src="images/member-icon-24.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-6.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            digital
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            Does My Website Need a Blog?
                        </a>
                        <p class="card__description">
                            The more your website visitors see that other people have had a positive experience
                            shopping on your site (whether that’s through reviews or testimonials) the more
                            trustworthy you’ll appear
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    7 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Anthony Clark
                                    <img class="card-list__link-img" src="images/member-icon-20.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-16.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            news
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            Digital Marketing for Online Business
                        </a>
                        <p class="card__description">
                            Good ecommerce web design is all about using the right colors, fonts, images, words
                            and graphics to convince visitors to make a purchase.
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    2 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Timothy Stuart
                                    <img class="card-list__link-img" src="images/member-icon-27.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-17.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            technology
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            6 Big Commerce Design Tips For Big Results
                        </a>
                        <p class="card__description">
                            One of the top rules you should keep in mind during the ecommerce design process is
                            “KISS”—keep it simple, silly!
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    12 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Lilly-Rose Holland
                                    <img class="card-list__link-img" src="images/member-icon-22.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-18.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            marketing
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            Making an Online Portfolio to Impress Clients
                        </a>
                        <p class="card__description">
                            The point is, if you want your customers to take you seriously, you need to show
                            them you take yourself seriously—and the only way to do that is with a professional
                            web design.
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    18 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Leila Calderon
                                    <img class="card-list__link-img" src="images/member-icon-1.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-19.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            web design
                        </p>
                        <a class="card__title" href="#">
                            Getting Started in SEO? Experts Share Helpful Tips
                        </a>
                        <p class="card__description">
                            When it comes to shopping online, people want to buy from established brands—not
                            faceless ecommerce sites that look like a front for trying to steal your credit card
                            information.
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Anthony Clark
                                    <img class="card-list__link-img" src="images/member-icon-28.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/group-img-20.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            technology
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            The Ultimate Guide to the Best WordPress LMS Plugin
                        </a>
                        <p class="card__description">
                            Investing in a professional website is a must if you want to build trust with your
                            customers—and developing that trust is a must if you want your ecommerce store to
                            succeed.
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    4 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Anthony Clark
                                    <img class="card-list__link-img" src="images/member-icon-26.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog__card card card--blog">
                    <div class="card__inner">
                        <a class="card-box__poster" href="{{ route('blog-page') }}">
                            <img class="card-box__poster-img" src="images/course-img-3.jpg" alt="img">
                        </a>
                        <p class="card__suptext card__suptext--purple">
                            news
                        </p>
                        <a class="card__title" href="{{ route('blog-page') }}">
                            How to Have a Job You Enjoy Doing
                        </a>
                        <p class="card__description">
                            Once you know who you are, you can work it into the branding of your ecommerce site.
                            And that branding? It’ll help build trust with your audience—and drive serious sales
                            in the process.
                        </p>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    January 13, 2022
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    10 Comments
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('blog-page') }}">
                                    by Susan Foley
                                    <img class="card-list__link-img" src="images/member-icon-4.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog__paging paging">
                <p class="paging__text">
                    Showing 1–8 of 35 results
                </p>
                <ul class="paging__list">
                    <li class="paging__list-item">
                        <p class="paging__list-text">
                            1
                        </p>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            2
                        </a>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            3
                        </a>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            4
                        </a>
                    </li>
                    <li class="paging__list-item">
                        <a class="paging__list-link" href="#">
                            5
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
