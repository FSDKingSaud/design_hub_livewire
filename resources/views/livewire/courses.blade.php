@section('main')
    <section class="main__courses courses">
        <div class="container">
            <h1 class="courses__title title">
                Courses
            </h1>
            <div class="courses__filters-panel filters-panel">
                <div class="filters-panel__tags tags">
                    <a class="tags__tag tags__tag--active" href="#">
                        All courses
                        <span>
                            17
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Paid Courses
                        <span>
                            7
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Free Courses
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
                            <option value="0">Most Popular</option>
                            <option value="1">Most Popular</option>
                            <option value="2">Most Popular 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="courses__inner">
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            development
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            The Ultimate Guide To Usability And UX
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Leila Calderon
                                    <img class="card-list__link-img" src="images/member-icon-12.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co1.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $65
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            UX/UI
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Become a UX Designer
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Anthony Clark
                                    <img class="card-list__link-img" src="images/member-icon-11.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co2.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $50-75
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            illustration
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Digital Marketing
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Anthony Clark
                                    <img class="card-list__link-img" src="images/member-icon-20.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co3.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $150
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            development
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Strategic Leadership and Management
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Leila Calderon
                                    <img class="card-list__link-img" src="images/member-icon-23.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co4.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $35
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            web design
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Web Design For Beginners
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Lilly-Rose Holland
                                    <img class="card-list__link-img" src="images/member-icon-4.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co5.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $40-60
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            development
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Fundamentals of Color and Appearance
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Susan Foley
                                    <img class="card-list__link-img" src="images/member-icon-15.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co6.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $65
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            ux/ui
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Designing a Low Prototype in Figma
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Anthony Clark
                                    <img class="card-list__link-img" src="images/member-icon-16.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co7.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $120
                            </p>
                        </a>
                    </div>
                </div>
                <div class="courses__card card card--courses">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            illustration
                        </p>
                        <a class="card__title" href="{{ route('courses-page') }}">
                            Creative Thinking: Techniques and Tools
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__rait">
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
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    6 Lessons
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    21 Students
                                </p>
                            </li>
                            <li class="card-list__item">
                                <a class="card-list__link" href="{{ route('courses-page') }}">
                                    by Leila Calderon
                                    <img class="card-list__link-img" src="images/member-icon-7.png" alt="img">
                                </a>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('courses-page') }}">
                            <img class="card-box__poster-img" src="images/new/co8.jpg" alt="img">
                            <p class="card-box__poster-text">
                                $15
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="courses__paging paging">
                <p class="paging__text">
                    Viewing 1 - 8 of 8 courses
                </p>
            </div>
        </div>
    </section>
@endsection

<span></span>
