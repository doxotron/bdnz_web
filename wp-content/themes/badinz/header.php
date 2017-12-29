<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package badinz
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,700,700i|Cairo:300,700" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="loader">
    <div class="spinner"></div>
</div>
<div id="page" class="site">
    <header id="masthead" class="site-header container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="site-branding text-left">
                            <?php the_custom_logo(); ?>
			            <?php
			            /*                        the_custom_logo();
												if (is_front_page() && is_home()) : */ ?><!--
                            <h1 class="site-title"><a href="<?php /*echo esc_url(home_url('/')); */ ?>"
                                                      rel="home"><?php /*bloginfo('name'); */ ?></a></h1>
                        <?php /*else : */ ?>
                            <p class="site-title"><a href="<?php /*echo esc_url(home_url('/')); */ ?>"
                                                     rel="home"><?php /*bloginfo('name'); */ ?></a></p>
                            <?php
			            /*                        endif;

												$description = get_bloginfo('description', 'display');
												if ($description || is_customize_preview()) : */ ?>
                            <p class="site-description"><?php /*echo $description; */ ?></p>
                            --><?php
			            /*                        endif; */ ?>

                    </div>
                    <div class="main-menu">
                        <nav id="site-navigation" class="main-navigation text-right">
                            <button class="navbar-toggle" aria-controls="primary-menu"
                                    aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
				            <?php
				            wp_nav_menu(array(
					            'theme_location' => 'menu-1',
					            'menu_id' => 'primary-menu',
				            ));
				            ?>
                        </nav>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
