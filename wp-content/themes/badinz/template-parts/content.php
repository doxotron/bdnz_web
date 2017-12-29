<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package badinz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="post-head-section" style="background:url('<?php the_post_thumbnail_url('full') ?>') top center no-repeat fixed; -webkit-background-size: cover;background-size: cover;" data-type="background" data-speed="2">
        <div class="container site-section">
            <div class="row">
                <div class="col-xs-10">
	                <?php
	                if ( is_singular() ) :
		                the_title( '<h2 class="text-white page-title">', '</h1>' );
	                else :
		                the_title( '<h2 class="text-white page-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	                endif;

	                if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
			                <?php badinz_posted_on(); ?>
                        </div><!-- .entry-meta -->
		                <?php
	                endif; ?>
                </div>
            </div>
        </div>
        <div class="front-scroll-cta"><span class="front-cta-line"></span></div>
    </section>
    <section>
        <div class="container site-section">
            <div class="row">
                <div class="col-xs-12">
	                <?php
	                the_content( sprintf(
		                wp_kses(
		                /* translators: %s: Name of current post. Only visible to screen readers */
			                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'badinz' ),
			                array(
				                'span' => array(
					                'class' => array(),
				                ),
			                )
		                ),
		                get_the_title()
	                ) );

	                wp_link_pages( array(
		                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'badinz' ),
		                'after'  => '</div>',
	                ) );
	                ?>
                </div>
            </div>
        </div>
    </section>
    <section class="light-grey-section blog-category-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
	                <?php badinz_entry_footer(); ?>
                </div>
            </div>
        </div>
    </section>
</article><!-- #post- -->
