@section('main')
    <section class="main__groups groups">
        <div class="container">
            <h1 class="groups__title title">
                Groups
            </h1>
            <div class="groups__filters-panel filters-panel">
                <div class="filters-panel__tags tags">
                    <a class="tags__tag tags__tag--active" href="#">
                        All Groups
                        <span>
                            31
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        My Groups
                        <span>
                            10
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Public Groups
                        <span>
                            23
                        </span>
                    </a>
                    <a class="tags__tag tags__tag" href="#">
                        Private Groups
                        <span>
                            8
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
                            <option value="0">Most Members</option>
                            <option value="1">Most Members</option>
                            <option value="2">Newest Registepink 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="groups__inner">
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            Public Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Graphic Design
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g1.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--green">
                            private Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Art Group
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g2.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            Public Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            UX/UI Design
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g3.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            Public Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Typography
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g4.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            Public Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Vector Graphics
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g5.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            Public Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Identity
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g6.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--green">
                            private Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Mobile Apps
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g7.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--green">
                            private Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            Readymag
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g8.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="groups__card card">
                    <div class="card__inner">
                        <p class="card__suptext card__suptext--pink">
                            Public Group
                        </p>
                        <div class="card__options card-options">
                            <div class="card-options__btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="card-options__inner">
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>
                                        Leave Group
                                    </span>
                                </a>
                                <a class="card-options__link" href="{{ route('group-page') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>
                                        Subscribe
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a class="card__title" href="{{ route('group-page') }}">
                            UX-research
                        </a>
                        <ul class="card__list card-list">
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    Active 7 days ago
                                </p>
                            </li>
                            <li class="card-list__item">
                                <p class="card-list__text">
                                    293 Members
                                </p>
                            </li>
                        </ul>
                        <a class="card-box__poster" href="{{ route('group-page') }}">
                            <img class="card-box__poster-img" src="images/new/g9.jpg" alt="img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="groups__paging paging">
                <p class="paging__text">
                    Viewing 10 - 18 of 18 groups
                </p>
                <ul class="paging__list">
                    <li class="paging__list-item">
                        <a class="paging__list-link paging__list-link--back" href="{{ route('group-page') }}">
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
                </ul>
            </div>
        </div>
    </section>
@endsection

<span></span>
