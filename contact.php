<?php /* Template Name: contact */ ?>
<?php

get_header();
?>

<link rel="stylesheet" href="<?php echo LRBO_THEME_URI?>/assets/css/contact.css">
<section id="lrbo-contact-page-root">
    <div class="lrbo-section-heading">
        <h2 class="lrbo-section__title"><?php echo get_the_title(); ?></h2>
    </div>
    <div class="lrbo-section-content">
        <?php echo the_content(); ?>
        <div class="lrbo-map">
            <div class="lrbo-map__address">
                <div class="lrbo-map__logo">
                    <img class="lrbo-logo-img" src="<?php echo LRBO_THEME_URI?>/assets/images/Lrbo-Logo.png" alt="Lrbo logo" />
                </div>
                <p>B-VEX bvba<br>Kerkstraat 15<br>2640 Mortsel<br>België<br>tel: +32 3 292 58 80<br>mail:&nbsp;info@lrbo.be<br>BTW: BE 0810.635.730</p>
            </div>
            <div id="map"></div>
        </div>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwOld1iW7_AyQlSnAEWXCvX-xSAQKQdKE&callback=initMap&v=weekly&channel=2"
            async
        ></script>
    </div>
</section>

<?php
get_footer();
