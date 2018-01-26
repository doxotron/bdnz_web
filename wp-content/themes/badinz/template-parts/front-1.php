<?php
/**
 * Created by PhpStorm.
 * User: MilosM
 * Date: 12/25/2017
 * Time: 3:29 PM
 */
/*
Template Name: Front Page One
*/

$video_file = get_field('f1_video_file');
$poster_image = get_field('f1_poster_image');
$logo = get_field('f1_logo');
$text_rotator = get_field('f1_text_rotator');
$rotator_text = get_field('f1_text_rotator_text');
$tagline = get_field('f1_tagline');
$company_video = get_field('company_video');

//error_reporting(E_ALL); ini_set('display_errors', 1);

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="homepage-hero-module" style="min-height: 100vh;">
                                <div class="video-container" style="min-height: 100vh;">
                                    <div class="video-filter"></div>
                                    <video autoplay loop class="video" poster="<?php echo $poster_image?>">
                                        <source src="<?php echo $video_file?>" type="video/mp4"/>
                                        Your browser does not support the video tag. We suggest you upgrade your
                                        browser.
                                    </video>
                                    <div class="front-heading">
                                        <img src="<?php echo $logo?>" class="front-hero-logo"
                                             style="margin-bottom:1%;">
                                        <!--<h1 class="text-white text-center">Badinz</h1>-->
                                        <h3 data-rotator="<?= $text_rotator?>" data-rotator-time="5000"
                                            data-rotator-speed="1000" class="text-white text-rotator front-subheading">
                                            Smart
                                        </h3>
                                        <h4 class="text-white front-subheading text-md"><?= $rotator_text?></h4>
                                        <h4 class="text-white front-subheading text-md"><?= $tagline?></h4>
                                        <?php if ($company_video != ""): ?>
                                        <a href="#" class="video-button"><i class="fa fa-play" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="front-scroll-cta"><span class="front-cta-line"></span></div>
                                </div>
                            </div>
                            <div class="entry-content features-section">
                                <div class="container site-section">
                                    <!-- <div class="row"> -->
                                    <div>
                                        <div class="col-md-12">
                                            <div class="row">
	                                            <?php the_content(); ?>
                                            </div>

                                            <div class="row features-group">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="row">
	                                                    <?php query_posts(array('post_type' => 'services','showposts' => 6,'order'    => 'ASC') );
	                                                    $feature = 0;
	                                                    if (have_posts()):
                                                            while (have_posts()) : the_post();
	                                                    ?>
                                                                <div class="col-md-4 col-sm-2 col-xs-4 feature<?php if($feature == 0) {echo ' active-feature';} ?>">
                                                                    <div class="feature-center">
			                                                            <?php the_post_thumbnail('full'); ?>
                                                                        <p><?php the_title(); ?></p>
                                                                    </div>
                                                                </div>
	                                                            <?php $feature++ ?>
                                                            <?php endwhile; endif; wp_reset_query(); // End of the loop. ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 text-right text-white">
                                                            <a href="#" class="features-button features-left"><i
                                                                        class="fa fa-angle-left"
                                                                        aria-hidden="true"></i></a><a
                                                                    href="#" class="features-button features-right"><i
                                                                        class="fa fa-angle-right"
                                                                        aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row features-description">
	                                                    <?php query_posts( array(
		                                                    'post_type' => 'services',
		                                                    'showposts' => 6
	                                                    ) );
	                                                    $slide = 0;
	                                                    if ( have_posts() ):
		                                                    while ( have_posts() ) : the_post();
			                                                    ?>
                                                                <div class="feature-descr-slide<?php if ( $slide == 0 ) {
				                                                    echo ' active-slide';
			                                                    }; ?>">
                                                                    <h4 class="text-white text-right"><?php the_title(); ?></h4>
                                                                    <span class="text-white text-right"><?php the_content(); ?></span>
                                                                </div>
			                                                    <?php $slide ++ ?>
		                                                    <?php endwhile; endif;
	                                                    wp_reset_query(); // End of the loop. ?>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 text-right">
                                                            <a href="<?= get_home_url() ?>/services" class="button button-white">Find out more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                            <section class="partners-section">
                                <div class="container site-section">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs">
                                            <h6 class="manimate manim-appear-bottom text-white partners-features"
                                                data-manim-time="400">
                                                <span class="circle-arrow"></span>Motivated team</h6>
                                            <p class="text-grey">We take every new project with passion, confidence, and
                                                intention for it to
                                                be the next greatest thing in tech.</p>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs">
                                            <h6 class="manimate manim-appear-bottom text-white partners-features"
                                                data-manim-time="100">
                                                <span class="circle-arrow"></span>Fast iterations</h6>
                                            <p class="text-grey">Get frequent updates and see your project growing at
                                                fast but steady
                                                pace.<br><br></p>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs">
                                            <h6 class="manimate manim-appear-bottom text-white partners-features"
                                                data-manim-time="300">
                                                <span class="circle-arrow"></span>Top Quality</h6>
                                            <p class="text-grey">We combine modern technology with highest standards to
                                                provide the best
                                                value for your business.</p>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs">
                                            <h6 class="manimate manim-appear-bottom text-white partners-features"
                                                data-manim-time="800">
                                                <span class="circle-arrow"></span>Reliability</h6>
                                            <p class="text-grey">Over 50 experienced developers, designers and business
                                                people, dedicated to
                                                your success.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <p class="text-grey text-lg">Thanks to our dedication and expertise, we have
                                                developed a close
                                                partnership with many companies around the world.</p>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12 text-center map-container">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/map.png" alt="">
                                            <span class="map-point map-point-default" style="left:51%; top:35.5%;"><p>We're here!<br>Niš, Serbia</p></span>
                                            <span class="map-point" style="left:50.5%; top:30.5%;"><p>Telekom<br>Belgrade, Serbia</p></span>
                                            <span class="map-point"
                                                  style="left:48%; top:31%;"><p>Crealogix<br>Zürich, Switzerland</p></span>
                                            <span class="map-point"
                                                  style="left:90.5%; top:85.5%;"><p>Tranxactor<br>Auckland, New Zealand</p></span>
                                            <span class="map-point"
                                                  style="left:92%; top:83%;"><p>Customer Radar<br>Auckland, New Zealand</p></span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="contact-section" data-type="background" data-speed="10">
                                <div class="container site-section">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h2 class="text-white text-right text-bold text-center-xs">We'd love to hear
                                                from you</h2>
                                            <p class="text-white text-right text-center-xs">
                                                Contact us with a brief description or specification of your project and
                                                we will contact you
                                                shortly to learn more about your needs.
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <div class="contact-form-container">
                                                <!--<form class="contact-form">
                                                    <input id="contactName" name="contactName" placeholder="Your Name*">
                                                    <input id="contactEmail" name="contactEmail"
                                                           placeholder="Your Email*">
                                                    <input id="contactSubject" name="contactSubject"
                                                           placeholder="Subject*">
                                                    <textarea id="contactMessage" name="contactMessage"
                                                              placeholder="Your Message*"></textarea>
                                                    <div class="text-right">
                                                        <button class="button button-dark" style="margin-top:20px;">Send
                                                            message
                                                        </button>
                                                    </div>
                                                </form>-->
                                                <?php echo do_shortcode('[wpforms id="138"]');?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php  query_posts( array(
	                            'post_type' => 'post',
	                            'showposts' => 3
                            ) );
                            if ( have_posts() ):?>
                            <section class="news-section">
                                <div class="container site-section">
                                    <div class="col-md-3">
                                        <h3 class="text-black text-right text-center-xs">News</h3>
                                    </div>
                                    <div class="col-md-9">
	                                    <?php

		                                    while ( have_posts() ) : the_post();
			                                    ?>
                                                <div class="row post-row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12">
	                                                    <?php if (has_post_thumbnail()) {
		                                                    the_post_thumbnail( 'full' );
	                                                    } else {
		                                                    $defaultImage = get_template_directory_uri();
		                                                    echo "<img src='$defaultImage/images/default_feat_img_logo.png' class='img-responsive'>";
	                                                    }
	                                                    ?>
                                                    </div>
                                                    <div class="col-sm-8 col-sm-12 col-xs-12">
                                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                                        <p><?php the_excerpt(); ?></p>
                                                        <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                                                    </div>
                                                </div>
		                                    <?php endwhile; ?>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <a href="<?= get_home_url() ?>/news" class="button button-dark">View all news</a>
                                    </div>
                                </div>
                            </section>
                                <?php  endif;
                            wp_reset_query(); // End of the loop.  ?>
                            <?php
                            query_posts( array(
	                            'post_type' => 'jobs',
	                            'showposts' => 3
                            ) );
                            if ( have_posts() ): ?>
                            <section class="light-grey-section jobs-section">
                                <div class="container site-section">
                                    <div class="col-md-3">
                                        <h3 class="text-black text-right text-center-xs">Latest job openings</h3>
                                    </div>
                                    <div class="col-md-9">
	                                    <?php
		                                    while ( have_posts() ) : the_post();
			                                    ?>
                                                <div class="row post-row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12">
					                                    <?php if (has_post_thumbnail()) {
						                                    the_post_thumbnail( 'full' );
					                                    } else {
						                                    $defaultImage = get_template_directory_uri();
						                                    echo "<img src='$defaultImage/images/default_feat_img_logo.png' class='img-responsive'>";
					                                    }
					                                    ?>
                                                    </div>
                                                    <div class="col-sm-8 col-sm-12 col-xs-12">
                                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                                        <p><?php the_excerpt(); ?></p>
                                                        <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                                                    </div>
                                                </div>
		                                    <?php endwhile; ?>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <a href="<?= get_home_url() ?>/jobs" class="button button-dark">View all jobs</a>
                                    </div>
                                </div>
                            </section>
                                <?php  endif;
                            wp_reset_query(); // End of the loop. ?>
                        </div>
                    </div>
                </article><!-- #post-## -->
            <?php endwhile; // End of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php if ($company_video != ""): ?>
    <!-- Modal -->
    <div class="video-modal">
        <div class="video-modal-back">
            <div class="video-modal-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$company_video?>?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                <div class="video-modal-close">
                    &times;
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php
// get_sidebar();
get_footer();
