<?php
/**
 * Template Name: Under construction
 *
 * @package WordPress
 * @subpackage Bright lives
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
     <?php get_header(); ?>
     <body <?php body_class(); ?>>
        <?php
        $args = array('hide_menu' => true);
        get_template_part( 'template-parts/page-header/page-header', null, $args);
        ?>
        <?php the_content(); ?>
        <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
        <?php wp_footer(); ?>
    </body>
</html>
