<?php /* Template Name: about */ ?>
<?php

get_header();
?>

<link rel="stylesheet" href="<?php echo LRBO_THEME_URI?>/assets/css/about.css">
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
