<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package badinz
 */

?>

</div><!-- #content -->
<footer>
    <div class="container site-section">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 text-center-xs">
		        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
				        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
		        <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 text-center-xs">
		        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
				        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
		        <?php endif; ?>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 footer-social text-center-xs">
		        <?php
		        wp_nav_menu(array(
			        'theme_location' => 'menu-social',
			        'menu_id' => 'social-menu',
		        ));
		        ?>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 text-center-xs">
		        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
				        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
		        <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-copyright">
        <div class="row">
            <div class="col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
		                    <?php if ( is_active_sidebar( 'bottom-footer' ) ) : ?>
                                <div id="secondary" class="widget-area" role="complementary">
				                    <?php dynamic_sidebar( 'bottom-footer' ); ?>
                                </div>
		                    <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
