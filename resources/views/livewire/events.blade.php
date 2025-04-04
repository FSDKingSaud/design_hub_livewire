@section('main')
    <section class="main__events events">
        <div class="container">
            <h1 class="events__title title">
                Events
            </h1>
            <div class="events__filters-panel filters-panel">
                <div class="filters-panel__tags tags">
                    <a class="tags__tag tags__tag--active" href="#">
                        All events
                        <span>
                            8
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Paid Events
                        <span>
                            6
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Free Events
                        <span>
                            2
                        </span>
                    </a>
                </div>
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
                            <option value="0">List</option>
                            <option value="1">List</option>
                            <option value="2">List 2</option>
                        </select>
                    </div>
                    <div class="filters-panel-form__select custom-select">
                        <select>
                            <option value="0">Upcoming</option>
                            <option value="1">Upcoming</option>
                            <option value="2">Upcoming 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="events__inner">
                <div class="events__card card card--events">
                    <div class="card__inner">
                        <p class="card__text">
                            Feb 27 – Mar 2, 2023
                        </p>
                        <a class="card__title card--events-title" href="{{ route('event-page') }}">
                            Big Global E-Commerce Conference 2024
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    New York, NY, United States
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('event-page') }}">
                                    by IT Education Centre
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('event-page') }}">
                            <img class="card-box__poster-img" src="images/new/event1.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $25
                            </p>
                        </a>
                    </div>
                </div>
                <div class="events__card card card--events">
                    <div class="card__inner">
                        <p class="card__text">
                            July 14, 2023
                        </p>
                        <a class="card__title card--events-title" href="{{ route('event-page') }}">
                            Design Research by UX Australia
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Virtual & Melbourne, Australia
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('event-page') }}">
                                    by Alex Crook, Brendan Reed
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('event-page') }}">
                            <img class="card-box__poster-img" src="images/new/event2.jpg" alt="img">
                            <p class="card-box__poster-text">
                                Free
                            </p>
                        </a>
                    </div>
                </div>
                <div class="events__card card card--events">
                    <div class="card__inner">
                        <p class="card__text">
                            Oct 29, 2023
                        </p>
                        <a class="card__title card--events-title" href="{{ route('event-page') }}">
                            Interaction 23
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Zurich, Switzerland
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('event-page') }}">
                                    by Laura Balboa, Jon Yablonski
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('event-page') }}">
                            <img class="card-box__poster-img" src="images/new/event3.jpg" alt="img">
                            <p class="card-box__poster-text">
                                Free
                            </p>
                        </a>
                    </div>
                </div>
                <div class="events__card card card--events">
                    <div class="card__inner">
                        <p class="card__text">
                            Nov 10-17, 2023
                        </p>
                        <a class="card__title card--events-title" href="{{ route('event-page') }}">
                            Strategies for Building a Resilient DesignOps Practice
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Virtual
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('event-page') }}">
                                    by Andrea Barbarins
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('event-page') }}">
                            <img class="card-box__poster-img" src="images/new/event4.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $100
                            </p>
                        </a>
                    </div>
                </div>
                <div class="events__card card card--events">
                    <div class="card__inner">
                        <p class="card__text">
                            Dec 30, 2024
                        </p>
                        <a class="card__title card--events-title" href="{{ route('event-page') }}">
                            Experience Design Conference
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Paris, France
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="#">
                                    by Clearleft
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('event-page') }}">
                            <img class="card-box__poster-img" src="images/new/event5.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $70
                            </p>
                        </a>
                    </div>
                </div>
                <div class="events__card card card--events">
                    <div class="card__inner">
                        <p class="card__text">
                            Mar 26, 2024
                        </p>
                        <a class="card__title card--events-title" href="{{ route('event-page') }}">
                            UX STRAT APAC 2023
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Bangkok, Thailand
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="#">
                                    by Chelsea Chen, Ruby Pryor
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('event-page') }}">
                            <img class="card-box__poster-img" src="images/new/event6.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $10 – $40
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<span></span>
