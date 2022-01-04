<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lrbo
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

<link rel="stylesheet" href="<?php echo LRBO_THEME_URI?>/style.css?version=2.0.0">
<?php wp_footer(); ?>
<footer>
	<div class="lrbo-footer">
	    <div class="lrbo-footer-content">
            <div class="lrbo-footer-content__text">
                <p class="lrbo-footer__address">LRBO BV</br>
                    Kerkstraat 15</br>
                    2640 Mortsel</br>
                    België</br>
                    Tel: +32 3 292 58 80</br>
                    Mail: info@lrbo.be</br>
                    BTW: be0810.635.730
                </p>
                <div class="lrbo-footer__menu">
                    <?php
                        $menu = clean_custom_menu("footer");
                    ?>
                </div>
            </div>
            <div class="lrbo-footer-contact">
                <? if ( !is_page( 'Contact' )  ) { ?>
                    <h3 class="lrbo-footer-contact__title">CONTACTFORMULIER</h3>
                    <?php echo do_shortcode ('[contact-form-7 title="Contactformulier 2"]'); ?>
                <?php } ?>
            </div>
        </div>
	    <div class="lrbo-footer__cp">
		    <p>2021 LRBO. All rights reserved</p>
        </div>
	</div>
</footer>
</body>
</html>
