<?php
/**
 * Created by PhpStorm.
 * User: MilosM
 * Date: 1/15/2018
 * Time: 1:53 PM
 */
/*
 * Template Name: Services
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
			<?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <section class="post-head-section"
                             style="background:url('<?php if ( has_post_thumbnail() ) {
						         the_post_thumbnail_url( "full" );
					         } else {
						         echo get_template_directory_uri() . "/images/featured_default_2.png";
					         } ?>') top center no-repeat fixed; -webkit-background-size: cover;background-size: cover;"
                             data-type="background" data-speed="2">
                        <div class="container site-section">
                            <div class="row">
                                <div class="col-xs-10">
                                    <h2 class="text-white page-title"><?php the_title() ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="front-scroll-cta"><span class="front-cta-line"></span></div>
                    </section>
                    <section>
                        <div class="container site-section">
                            <div class="row">
								<?php query_posts( array(
									'post_type' => 'services'
								) );
								if ( have_posts() ):
									while ( have_posts() ) : the_post();
										?>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="service-primary">
                                                <div class="service-primary-inner">
													<?php the_post_thumbnail( 'full', [ 'class' => 'img-responsive' ] ) ?>
                                                    <h6 class="text-white"><?php the_title(); ?></h6>
                                                </div>
                                                <div class="service-primary-description">
                                                    <div class="text-white"><?php the_content(); ?></div>
                                                </div>
                                            </div>
                                        </div>
									<?php endwhile; endif;
								wp_reset_query(); // End of the loop. ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
									<?php the_content(); ?>
                                </div>
                            </div>
                            <div class="row">
								<?php query_posts( array(
									'post_type' => 'technologies',
									'order'     => 'DESC'
								) );
								if ( have_posts() ):
									while ( have_posts() ) : the_post();
										?>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="service-content">
                                                <div class="service-content-inner">
													<?php the_post_thumbnail( 'full', [ 'class' => 'img-responsive' ] ) ?>
                                                    <h4 class="text-bold"><?php the_title(); ?></h4>
													<?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
									<?php endwhile; endif;
								wp_reset_query(); // End of the loop. ?>
                            </div>
                        </div>
                    </section>
                </article>
			<?php endwhile; // End of the loop. ?>
        </main>
    </div>
<?php

get_footer();

