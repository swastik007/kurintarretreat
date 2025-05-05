<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kurintar_Retreat
 */

get_header();
?>
	
<!-- banner section area -->
<?php get_template_part( 'template-parts/slider-area', 'none' ); ?>
<!-- banner section area -->

<!-- about resort section area -->
<?php get_template_part( 'template-parts/about-resort', 'none' ); ?>
<!-- about resort section area -->

 <!-- about bar section -->
 <?php get_template_part( 'template-parts/about-bar', 'none' ); ?>
<!-- about bar ends -->

 <!-- video section area -->
<?php get_template_part( 'template-parts/video-section', 'none' ); ?>
<!-- video section area -->

<!-- features section area -->
<?php get_template_part( 'template-parts/hotel-facility', 'none') ?>
<!-- features section area -->

<!-- room section area -->
<?php get_template_part( 'template-parts/room-section', 'none') ?>
<!-- room section area -->

<!-- blogs section area -->
 <?php get_template_part( 'template-parts/blogs-page', 'none'); ?>
<!-- blogs section area -->

<!-- service section area -->
<?php get_template_part( 'template-parts/service-section', 'none' ); ?>
<!-- service section area -->

<!-- call to area section area -->
<?php get_template_part( 'template-parts/call-to-action', 'none' ); ?>
<!-- call to area section area -->
<?php

get_footer();
