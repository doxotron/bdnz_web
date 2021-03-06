<?php
/**
 * Created by PhpStorm.
 * User: MilosM
 * Date: 1/19/2018
 * Time: 5:11 PM
 */
/*
 * Template Name: About Us
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
                        <div class="container-fluid site-section">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            <?php endwhile; // End of the loop. ?>
        </main>
    </div>
<?php

get_footer();

