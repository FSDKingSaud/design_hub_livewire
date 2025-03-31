@section('main')
    <section class="main__freelancers freelancers">
        <div class="container">
            <h1 class="freelancers__title title">
                Freelancers
            </h1>
            <div class="freelancers__filters-panel filters-panel">
                <div class="filters-panel__tags tags">
                    <a class="tags__tag tags__tag--active" href="#">
                        All
                        <span>
                            23
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        UX/UI Designers
                        <span>
                            10
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Illustrators
                        <span>
                            5
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        3D Artists
                        <span>
                            6
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Graphic Designers
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
                            <option value="0">Newest Registered</option>
                            <option value="1">Newest Registered</option>
                            <option value="2">Newest Registered 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="freelancers__inner">
                <div class="freelancers__card card freelancers--card">
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
                            Valerie
                            <span>
                                Ferguson
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @valerie_ui
                        </a>
                        <p class="card__subtext">
                            Vancouver, British Columbia, Canada
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-24.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $30
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.7
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        26 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
                    <div class="card__inner">
                        <p class="card__suptext">
                            web designer
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
                            Jermaine
                            <span>
                                Mooney
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @jermaine-mooney-des
                        </a>
                        <p class="card__subtext">
                            Vienna, Austria
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-22.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $65 - $75
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.2
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        83 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Elodie
                            <span>
                                Hardin
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @elhardin.3dart
                        </a>
                        <p class="card__subtext">
                            Rotterdam, Netherlands
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-4.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $40
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            5.0
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        19 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Armaan
                            <span>
                                Humphrey
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @humphrey83
                        </a>
                        <p class="card__subtext">
                            London, United Kingdom
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-7.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $20 - $35
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.5
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        2 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Homer
                            <span>
                                Heath
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @hheath-ux
                        </a>
                        <p class="card__subtext">
                            Helsinki, Finland
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-28.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $40 - $50
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.6
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        5 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Jing
                            <span>
                                Zhang
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @mazakii_aquarelle
                        </a>
                        <p class="card__subtext">
                            Barcelona, Spain
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-21.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $38
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.1
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        20 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Floyd
                            <span>
                                Frederick
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @ff_ux
                        </a>
                        <p class="card__subtext">
                            San Ġiljan (St Julian's), Malta
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-24.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $59
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.4
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        48 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Susan
                            <span>
                                Jordan
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @susy.jordan_dsgn
                        </a>
                        <p class="card__subtext">
                            Oslo, Norway
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-23.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $10 - $20
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            5.0
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        37 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
                <div class="freelancers__card card freelancers--card">
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
                            Francesca
                            <span>
                                Curtis
                            </span>
                        </h3>
                        <a class="card__text" href="#">
                            @francurtis_3dartist
                        </a>
                        <p class="card__subtext">
                            Paris, France
                        </p>
                        <div class="card__box card-box">
                            <div class="card-box__person-img card-person-img">
                                <img class="card-person-img__image" src="images/member-icon-1.png" alt="img">
                                <span class="card-person-img__status card-person-img__status--disabled">

                                </span>
                            </div>
                            <div class="card-box__inner">
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        $100
                                    </p>
                                    <p class="card-box-column__subtext">
                                        per hour
                                    </p>
                                </div>
                                <div class="card-box__column card-box-column">
                                    <p class="card-box-column__text">
                                        <span>
                                            4.5
                                        </span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="icons" clip-path="url(#clip0_114_9488)">
                                                <path id="Vector"
                                                    d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                                    fill="#F9D442" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_114_9488">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </p>
                                    <p class="card-box-column__subtext">
                                        6 reviews
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="card__link" href="#">
                            Invite
                        </a>
                    </div>
                </div>
            </div>
            <div class="freelancers__paging paging">
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
