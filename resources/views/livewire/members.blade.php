@section('main')
    <section class="main__members members">
        <div class="container">
            <h1 class="members__title title">
                Members
            </h1>
            <div class="members__filters-panel filters-panel">
                <div class="filters-panel__tags tags">
                    <a class="tags__tag tags__tag--active" href="#">
                        All Members
                        <span>
                            23
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Following
                        <span>
                            10
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
                            <option value="0">Newest Registered</option>
                            <option value="1">Newest Registered</option>
                            <option value="2">Newest Registered 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="members__inner">
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            3d artist
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Anthony
                            <span>
                                Clark
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @anthony-clark
                        </a>
                        <p class="card__subtext">
                            Joined April 2019
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-2.png" alt="img">
                                <span class="card-person-img__status">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            ux/ui designer
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Valerie
                            <span>
                                Ferguson
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @valerie_ui
                        </a>
                        <p class="card__subtext">
                            Joined Oct 2020
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-3.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            illustrator
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Lilly-Rose
                            <span>
                                Holland
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @lillyrose.flower
                        </a>
                        <p class="card__subtext">
                            Joined Jan 2015
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-7.png" alt="img">
                                <span class="card-person-img__status">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            graphic designer
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}s">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Tina
                            <span>
                                Alvarez
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @tina.alvarez
                        </a>
                        <p class="card__subtext">
                            Joined Aug 2021
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-8.png" alt="img">
                                <span class="card-person-img__status">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            ux/ui designer
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Susan
                            <span>
                                Fole
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @susan-foley
                        </a>
                        <p class="card__subtext">
                            Joined Feb 2021
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-4.png" alt="img">
                                <span class="card-person-img__status">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            3d artist
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Timothy
                            <span>
                                Stuart
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @tim.stuart.3d
                        </a>
                        <p class="card__subtext">
                            Joined Dec 2022
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-10.png" alt="img">
                                <span class="card-person-img__status">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            ux/ui designer
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Philippa
                            <span>
                                Bush
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @philippa-bush23
                        </a>
                        <p class="card__subtext">
                            Joined May 2023
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-9.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}s">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            illustrator
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Katie
                            <span>
                                Campbell
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @katie.campbell.art
                        </a>
                        <p class="card__subtext">
                            Joined Apr 2018
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-28.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}s">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
                <div class="members__card card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            graphic designer
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Add Friend
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('members-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="card__title">
                            Leila
                            <span>
                                Calderon
                            </span>
                        </h3>
                        <a class="card__text" href="{{ route('members-page') }}">
                            @lcalderon.paralect
                        </a>
                        <p class="card__subtext">
                            Joined Jul 2020
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-19.png" alt="img">
                                <span class="card-person-img__status">

                                </span>
                            </div>
                            <a class="card-box__link" href="{{ route('members-page') }}">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="members__paging paging">
                <p class="paging__text">
                    Viewing 1 - 9 of 30 active members
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
