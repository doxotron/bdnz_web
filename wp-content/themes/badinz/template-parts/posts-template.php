<?php
/**
 * Created by PhpStorm.
 * User: MilosM
 * Date: 12/27/2017
 * Time: 1:37 PM
 */
/*
Template Name: Posts Page
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
			<?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <section class="post-head-section"
                             style="background:url('<?php if (has_post_thumbnail()) { the_post_thumbnail_url("full");} else {echo get_template_directory_uri()."/images/featured_default_2.png";}?>') top center no-repeat fixed; -webkit-background-size: cover;background-size: cover;"
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
							<?php
							// the query
							$wpb_all_query = new WP_Query( array( 'post_type'      => 'post',
							                                      'post_status'    => 'publish',
							                                      'posts_per_page' => - 1
							) ); ?>

							<?php if ( $wpb_all_query->have_posts() ) : ?>
                                <!-- the loop -->
								<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                <div class="row post-row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <?php if (has_post_thumbnail()) {
	                                        the_post_thumbnail( 'full');
                                        } else {
                                            $defaultPath = get_template_directory_uri();
                                            echo "<img src='$defaultPath/images/featured_default.png' class='img-responsive'>";
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                        <p><?php the_excerpt(); ?></p>
                                        <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                                    </div>
                                </div>
								<?php endwhile; ?>
                                <!-- end of the loop -->
								<?php wp_reset_postdata(); ?>

							<?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
                        </div>
                    </section>
                </article>
			<?php endwhile; // End of the loop. ?>
        </main>
    </div>
<?php

get_footer();