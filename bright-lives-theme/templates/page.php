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
 <!--?php get_template_part( 'template-parts/page-header/page-header' ); ?-->

 <main class="bg-gray-500 pb-20 h-96">
   <div class="p-6">
	   <?php the_content(); ?>
   </div>
 </main>
 <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
 <?php wp_footer(); ?>
 </body>
 </html>