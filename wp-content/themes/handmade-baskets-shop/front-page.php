<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osp
 */
get_header();

?>

    <main>
        <section class="benefits">
            <div class="container">
                <div class="benefits__grid">

                    <div class="benefits__title">
                        <h2 class="title-2">Why Choosing Us</h2>
                    </div>

                    <div class="benefit">
                        <h3 class="benefit__title">Luxury facilities</h3>
                        <p class="benefit__text">The advantage of hiring a workspace with us is that givees you comfortable service and all-around facilities.</p>
                        <a class="read-more" href="#!">More Info</a>
                    </div>

                    <div class="benefit">
                        <h3 class="benefit__title">Affordable Price</h3>
                        <p class="benefit__text">You can get a workspace of the highst quality at an affordable price and still enjoy the facilities that are oly here.</p>
                        <a class="read-more" href="#!">More Info</a>
                    </div>

                    <div class="benefit">
                        <h3 class="benefit__title">Many Choices</h3>
                        <p class="benefit__text">We provide many unique work space choices so that you can choose the workspace to your liking.</p>
                        <a class="read-more" href="#!">More Info</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">

                <div class="products__title">
                    <h2 class="title-2">Best Selling Product</h2>
                </div>

                <div class="products__tabs none">
                    <div class="tab-controls">
                        <button data-tab="all" class="tab-controls__btn tab-controls__btn--active">All</button>
                        <button data-tab="chair" class="tab-controls__btn">Chair</button>
                        <button data-tab="bed" class="tab-controls__btn">Beds</button>
                        <button data-tab="sofa" class="tab-controls__btn">Sofa</button>
                        <button data-tab="lamp" class="tab-controls__btn">Lamp</button>
                    </div>
                </div>

                <div class="products__slider">

                    <!-- //slider -->
                    <div class="slider">

                        <!-- Slider main container -->
                        <div class="swiper">

                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <article data-tab-value="chair" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Chair</a>
                                        <h3 class="card__title">Sakarias Armchair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">392</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="chair" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Chair</a>
                                        <h3 class="card__title">Baltsar Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">299</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="bed" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-03.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-03@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Bed</a>
                                        <h3 class="card__title">Anjay Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">519</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="sofa" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Sofa</a>
                                        <h3 class="card__title">Nyantuy Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">921</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="lamp" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Lamp</a>
                                        <h3 class="card__title">Sakarias Armchair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">392</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="bed" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Bed</a>
                                        <h3 class="card__title">Baltsar Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">299</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="sofa" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-03.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-03@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Sofa</a>
                                        <h3 class="card__title">Anjay Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">519</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="lamp" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Lamp</a>
                                        <h3 class="card__title">Nyantuy Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">921</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="bed" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Bed</a>
                                        <h3 class="card__title">Nyantuy Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">921</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="chair" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Chair</a>
                                        <h3 class="card__title">Sakarias Armchair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">392</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="chair" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Chair</a>
                                        <h3 class="card__title">Baltsar Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">299</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="bed" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-03.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-03@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Bed</a>
                                        <h3 class="card__title">Anjay Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">519</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="lamp" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-04@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Lamp</a>
                                        <h3 class="card__title">Nyantuy Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">921</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="chair" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-01@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Chair</a>
                                        <h3 class="card__title">Sakarias Armchair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">392</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>

                                <article data-tab-value="chair" class="card swiper-slide">
                                    <a href="#product-page" class="card__link"></a>
                                    <div class="card__photo">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02.png" srcset="<?php echo get_template_directory_uri() ?>/src/img/products/chair-02@2x.png 2x" alt="Title" class="card__img">
                                    </div>

                                    <div class="card__desc">

                                        <a href="#category" class="card__category">Chair</a>
                                        <h3 class="card__title">Baltsar Chair</h3>

                                        <div class="card__rating">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star.svg" alt="">
                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/star-off.svg" alt="">
                                        </div>

                                        <div class="card__footer">
                                            <div class="card__price" data-value="$">299</div>
                                            <button class="card__btn">
                                                Add to cart
                                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/plus.svg" alt="Add to cart">
                                            </button>
                                        </div>

                                    </div>
                                </article>
                            </div>

                        </div>

                        <!-- If we need navigation buttons -->
                        <button id="sliderPrev" class="slider__btn slider__btn--prev">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/slider/slider-left.svg" alt="Previous">
                        </button>

                        <button id="sliderNext" class="slider__btn slider__btn--next">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/slider/slider-right.svg" alt="Next">
                        </button>

                    </div>
                    <!-- //slider -->

                </div>
                <!-- //products__slider -->

                <div class="products__link">
                    <a class="read-more read-more--large" href="#!">View All</a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>