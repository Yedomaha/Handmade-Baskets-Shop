<footer class="footer">
    <div class="container container--small">
        <!-- footer__grid -->
        <div class="footer__grid">

            <!-- Desc -->
            <div class="footer__desc">
                <div class="footer__logo">
                    <a href="#!" class="logo">PotteryNest</a>
                </div>

                <p>The advantage of hiring a workspace with us is that givees you comfortable service and all-around facilities.</p>
            </div>
            <!-- // Desc -->

            <nav class="footer__nav footer__nav--services">
                <h3 class="footer__nav-title">Services</h3>
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#!">Email Marketing</a></li>
                    <li class="footer__list-item"><a href="#!">Campaigns</a></li>
                    <li class="footer__list-item"><a href="#!">Branding</a></li>
                </ul>
            </nav>

            <nav class="footer__nav">
                <h3 class="footer__nav-title">Furniture</h3>
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#!">Beds</a></li>
                    <li class="footer__list-item"><a href="#!">Chair</a></li>
                    <li class="footer__list-item"><a href="#!">All</a></li>
                </ul>
            </nav>

        </div>
        <!-- // footer__grid -->


        <!-- footer__row -->
        <div class="footer__row">
            <div class="footer__copyright">Copyright © 2023</div>

            <div class="footer__links">
                <a href="#!">Terms & Conditions</a>
                <a href="#!">Privacy Policy</a>
            </div>

        </div>
        <!-- // footer__row -->

    </div>
</footer>

<!-- Mobile nav -->
<div id="mobile-nav" class="mobile-nav-wrapper">
    <div class="mobile-nav-header">
        <a href="#cart" class="mobile-cart">
            <div href="#!" class="cart">
                <img
                    class="cart__img"
                    src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                    alt=""
                />
                <div class="cart__count">0</div>
            </div>
            Cart
        </a>

        <button id="close-mobile-nav-btn" class="mobile-nav-btn-close">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/close.svg" alt="Close navigation">
        </button>
    </div>

    <ul class="mobile-nav">
        <li class="mobile-nav__item">
            <a href="#furniture" class="mobile-nav__link mobile-nav__link--dropdown">Furniture</a>
            <ul class="mobile-sub-nav">
                <li class="mobile-sub-nav__item"><a href="#!" class="mobile-sub-nav__link">Home</a></li>
                <li class="mobile-sub-nav__item"><a href="#!" class="mobile-sub-nav__link">Services</a></li>
                <li class="mobile-sub-nav__item"><a href="#!" class="mobile-sub-nav__link">Products</a></li>
                <li class="mobile-sub-nav__item"><a href="#!" class="mobile-sub-nav__link">Contacts</a></li>
            </ul>
        </li>
        <li class="mobile-nav__item">
            <a href="#!" class="mobile-nav__link">Shop</a>
        </li>
        <li class="mobile-nav__item">
            <a href="#!" class="mobile-nav__link">About Us</a>
        </li>
        <li class="mobile-nav__item">
            <a href="#!" class="mobile-nav__link">Contact</a>
        </li>
    </ul>
</div>
<!-- // Mobile nav -->