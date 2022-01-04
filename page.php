<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lrbo
 */

get_header();
?>
<link rel="stylesheet" href="<?php echo LRBO_THEME_URI?>/assets/css/page.css">
<section id="lrbo-about-page-root">
    <div class="lrbo-section-heading">
        <h2 class="lrbo-section__title"><?php echo get_the_title(); ?></h2>
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="lrbo-section__bc">','</p>' );
            }
        ?>
    </div>
    <div class="lrbo-section-content">
        <?php echo the_content(); ?>
    </div>
</section>
<?php
get_footer();
