<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/fontawesome.min.css">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>

    <header class="bg">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="navbar__logo">
                    <div id="menu-icon"><i class="fas fa-bars"></i></div>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                    <ul>

                    </ul>
                </div>

                <nav class="navbar__link">
                    <ul id="header-menu" class="menu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'Primary',
                                'container' => 'false',
                                'menu_id' => 'header-menu',
                                'menu_class' => 'menu'
                            )
                        ); ?>
                    </ul>
                </nav>
                <div class="navbar__icon">
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-search"></i></a>
                        </li>
                        <span>|</span>
                        <li>
                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                        </li>
                        <span>|</span>
                        <li>
                            <a href="#"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="slider-text">
                <h1>Dumbbells Shop</h1>
                <h2>Best body fitness</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. <span></span>
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the <span></span>
                    1500s, when an unknown printer.
                </p>
                <button>shop now</button>
            </div>
        </div>
    </header>






    <?php
    // Output the menu modal.
    get_template_part('template-parts/modal-menu'); ?>

    <?  // echo do_shortcode("[thao_shortcode]"); 
        ?>
       
        
		