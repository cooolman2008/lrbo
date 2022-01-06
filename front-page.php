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
 * @package Lrbo
 */

get_header();
?>
<section id="lrbo-home-page-root">
</section>
<section class="lrbo-section" >
</section>
<section class="lrbo-section">
</section>
<section class="lrbo-section">
    <?php 
        include(locate_template('reference.php'));
    ?>
</section>

<?php
get_footer();
