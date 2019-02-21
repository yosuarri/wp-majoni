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
</head>

<body>
    <header>
        <div class="header-wrapper">
            <div class="header-item brand">
                <a href="#">brand</a>
            </div>
            <nav class="header-item">
                <li class="menu fa fa-bars" aria-hidden="true">
                    <ul class="inner-menu">
                        <li>About</li>
                        <li>Blog</li>
                        <li>Shop</li>
                        <li>Services</li>
                        <li>Contact</li>
                    </ul>
                <li>
            </nav>
        </div>
    </header>

