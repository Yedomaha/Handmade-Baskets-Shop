<header class="header">
    <div class="container">
        <nav class="header__nav nav">

            <div class="nav__logo">
                <a href="#!" class="logo">PotteryNest</a>
            </div>

            <ul class="nav-list">
                <li class="nav-list__item">
                    <a href="#furniture" class="nav-list__link nav-list__link--dropdown">Furniture</a>
                    <div class="nav-list__sub-nav">
                        <ul class="sub-nav">
                            <li class="sub-nav__item"><a href="#!" class="sub-nav__link">Home</a></li>
                            <li class="sub-nav__item"><a href="#!" class="sub-nav__link">Services</a></li>
                            <li class="sub-nav__item"><a href="#!" class="sub-nav__link">Products</a></li>
                            <li class="sub-nav__item"><a href="#!" class="sub-nav__link">Contacts</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-list__item">
                    <a href="#!" class="nav-list__link">Shop</a>
                </li>
                <li class="nav-list__item">
                    <a href="#!" class="nav-list__link">About Us</a>
                </li>
                <li class="nav-list__item">
                    <a href="#!" class="nav-list__link">Contact</a>
                </li>
            </ul>

            <a href="#!" class="cart">
                <img
                    class="cart__img"
                    src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                    alt=""
                />
                <div class="cart__count">0</div>
            </a>

            <button id="open-mobile-nav-btn" class="nav__btn"><img src="<?php echo get_template_directory_uri() ?>/src/img/icons/mobile-nav.svg" alt="Open navigation"></button>
        </nav>

        <div class="header__content">
            <h1 class="header__title">
                Make your interior more modern
            </h1>
            <p>
                Turn your room with PotteryNest into a lot more
                modern with ease and speed
            </p>

            <div class="header__search">
                <form action="" class="search-form">
                    <input
                        placeholder="Search furniture"
                        type="text"
                        class="search-form__input"
                        autocomplete="off"
                    />
                    <button class="search-form__btn">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/search.svg" alt="Search" />
                    </button>
                </form>
            </div>

        </div>

        <div class="header__dot header__dot--sofa">
            <button class="info-dot">
                <div class="info-dot__circle"></div>
                <div class="info-dot__radius"></div>
            </button>
            <div class="info-hint none">
                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--orange"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--biruza"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--gray"></div>
                </label>
            </div>
        </div>

        <div class="header__dot header__dot--vase">
            <button class="info-dot">
                <div class="info-dot__circle"></div>
                <div class="info-dot__radius"></div>
            </button>
            <div class="info-hint none">
                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--orange"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--biruza"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--gray"></div>
                </label>
            </div>
        </div>

        <div class="header__dot header__dot--item">
            <button class="info-dot">
                <div class="info-dot__circle"></div>
                <div class="info-dot__radius"></div>
            </button>
            <div class="info-hint none">
                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--orange"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--biruza"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--gray"></div>
                </label>
            </div>
        </div>

        <div class="header__dot header__dot--wall">
            <button class="info-dot">
                <div class="info-dot__circle"></div>
                <div class="info-dot__radius"></div>
            </button>
            <div class="info-hint none">
                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--orange"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--biruza"></div>
                </label>

                <label>
                    <input type="radio" name="sofa-color" class="info-hint__radio">
                    <div class="info-hint__radio-fake info-hint__radio-fake--gray"></div>
                </label>
            </div>
        </div>
    </div>
</header>