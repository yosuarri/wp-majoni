<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
<header>
    <div class="header-wrapper">
        <div class="header-item brand">
            <a href="#">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/majoni-logo.svg"/>
            </a>
        </div>
        <nav class="header-item">
            <li class="menu fa fa-bars" aria-hidden="true">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class'     => 'main-menu',
                        'depth'          => 1,
                    )
                );
                ?>
            </li>
        </nav>
    </div>
</header>


