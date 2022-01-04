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

<link rel="stylesheet" href="<?php echo LRBO_THEME_URI?>/assets/css/home.css">
<section id="lrbo-home-page-root">
    <?php $slider_content = get_field('slider_content', $post_id);
    $titles = array_column($slider_content, 'title');
    $descs = array_column($slider_content, 'description');
    $links = array_column($slider_content, 'link');
    $images = array_column($slider_content, 'image');?>
    <div class="lrbo-home-slider">
        <?php foreach( $images as $index => $item ) {?>
            <div class="lrbo-home-slider__img <?php echo ($index == 0) ? 'active' : '';?>" style="background-image: url(<?php echo $item['url'];?>);" data-index="<?php echo $index;?>"></div>
        <?php } ?>
        <div class="lrbo-home-slider-content">
            <?php foreach( $titles as $index => $item ) {?>
                <div class="lrbo-home-slider__title <?php echo ($index == 0) ? 'active' : '';?>" data-index="<?php echo $index;?>"><h2><?php echo $item;?></h2></div>
            <?php } ?>
            <?php foreach( $descs as $index => $item ) {?>
                <div class="lrbo-home-slider__desc <?php echo ($index == 0) ? 'active' : '';?>" data-index="<?php echo $index;?>"><p><?php echo $item;?></p></div>
            <?php } ?>
            <?php foreach( $links as $index => $item ) {?>
                <div class="lrbo-home-slider__link <?php echo ($index == 0) ? 'active' : '';?>" data-index="<?php echo $index;?>"><a target="_blank" href="<?php echo $item;?>">MEER INFO</a></div>
            <?php } ?>
        </div>
        <div class="lrbo-home-slider__nav">
            <p class=""><span id="index">1</span>/<?php echo count($slider_content); ?></p>
            <div data-total="<?php echo count($slider_content); ?>" class="lrbo-slider__arrow lrbo-slider__prev" id="lrbo-slider__prev">
                <img data-total="<?php echo count($slider_content); ?>" src="<?php echo LRBO_THEME_URI?>/assets/images/arrow.png" />
            </div>
            <div data-total="<?php echo count($slider_content); ?>" class="lrbo-slider__arrow lrbo-slider__next" id="lrbo-slider__next">
                <img data-total="<?php echo count($slider_content); ?>" src="<?php echo LRBO_THEME_URI?>/assets/images/arrow.png" />
            </div>
        </div>
    </div>
</section>
<section class="lrbo-section">
    <div class="lrbo-intro">
        <h2 class="lrbo-intro__title">Lrbo</h2>
        <p class="lrbo-intro__desc">Het team van B-VEX verleent bouwservice en vastgoedexpertise aan professionele en particuliere klanten. 
Architecten, aannemers en bouwheren krijgen van B-VEX een volledig servicepakket aangeboden van 
veiligheidscoördinatie, EPB en plaatsbeschrijving.</p>
    </div>
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
