<?php
/**
 * Template Name: Page
 *
 * @package WordPress
 * @subpackage Bright lives
 */
 ?>

 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <?php get_header(); ?>
 <body <?php body_class(); ?>>
<!-- //get_template_part( 'template-parts/page-header/page-header' ); ?-->

 <main class="pb-20">
   <?php the_content(); ?>
 </main>
 <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
 <?php wp_footer(); ?>
 </body>
 </html>
