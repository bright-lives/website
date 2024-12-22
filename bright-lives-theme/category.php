<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package WordPress
 * @subpackage Bright lives
 */

require_once get_template_directory() . '/includes/walkers/horizontal-tailwind-category-walker.php';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/page-header/page-header' ); ?>
<?php
$args = array('title' => single_cat_title('', false));
get_template_part('template-parts/section-title/section-title', null, $args)
?>
<main class="bg-slate-200 pb-20">
    <section class="container mx-auto grid-cols-1">
        <article class="p-10 md:px-0 max-w-2xl prose">
            <?php echo category_description(); ?>
        </article>
    </section>
    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 m-16 gap-y-20 bg-slate-200">
	    <?php
	    if (have_posts()) :
		    while (have_posts()) : the_post();
        ?>
			    <?php get_template_part( 'template-parts/post-template/post-template' ); ?>
        <?php
        endwhile;
		    the_posts_navigation();
	    else :
		    echo '<p>Geen artikelen gevonden in deze categorie.</p>';
	    endif;
	    ?>
    </section>
</main>
<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
