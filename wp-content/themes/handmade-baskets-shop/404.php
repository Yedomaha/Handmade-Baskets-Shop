<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package osp
 */

get_header();

$brochure_file_url = get_field( 'brochure_file', 'options' );

$header     = get_field( 'header', 'options' );
$logo_dark  = $header['logo_dark'];

$page_404  = get_field( 'page_404', 'options' );
$title     = $page_404['title'];
$sub_title = $page_404['sub-title'];
$text      = $page_404['text'];

?>

    <main>

        <section class="page-404">
            <div class="container">

                <!--todo: logo area-->
                <div class="common-logo-area main-screen__logo-area common-logo-area--mobile">
                    <div class="common-logo-area__logo-helper">

						<?php if ( ! empty( $logo_dark ) ): ?>

                            <div class="common-logo-area__logo-wrap">
                                <a href="<?php echo get_home_url() ?>"></a>
                                <img src="<?php echo aq_resize( $logo_dark['url'], 500 ) ?>" alt="">
                            </div>

						<?php endif; ?>

                    </div>
                    <div class="header__burger-btn">
                        <div data-burger-btn class="burger-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>
            <img class="page-404__deco-img page-404__deco-img--desktop"
                 src="<?php echo get_template_directory_uri() ?>/dist/img/deco/deco-girl.png" alt="">
            <img class="page-404__deco-img page-404__deco-img--mobile"
                 src="<?php echo get_template_directory_uri() ?>/dist/img/deco/deco-girl-90deg.png" alt="">
            <div class="container">
                <div class="page-404__inner">

					<?php if ( ! empty( $title ) ): ?>

                        <h1 class="page-404__title"><?php echo $title ?></h1>

					<?php endif; ?>

					<?php if ( ! empty( $sub_title ) ): ?>

                        <h2 class="page-404__subtitle"><?php echo $sub_title ?></h2>

					<?php endif; ?>

					<?php if ( ! empty( $text ) ): ?>

                        <div class="page-404__text"><?php echo $text ?></div>

					<?php endif; ?>

                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>