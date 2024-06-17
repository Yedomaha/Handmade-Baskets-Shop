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
        </section>

    </main>

<?php get_footer(); ?>