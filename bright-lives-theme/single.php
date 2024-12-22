<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Bright lives
 */

require_once get_template_directory() . '/includes/walkers/horizontal-tailwind-category-walker.php';

get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/page-header/page-header' ); ?>
<main class="bg-primary-500 flex pb-20 pt-40">
	<section class="md:mx-auto max-w-4xl mt-8 md:m-16 bg-white p-8 md:p-20">
      <div class="grid grid-cols-1">
        <div class="mb-12">
            <h1 class="text-4xl leading-normal font-serif mb-6"><?php the_title(); ?></h1>
            <div class="prose">
              <?php the_excerpt(); ?>
            </div>
            <ul class="mt-10">
                <?php
                $args = array(
                    'title_li' => '',
                    'include' => wp_get_post_categories(get_the_ID()),
                    'hide_empty' => false,
                    'walker' => new Horizontal_Tailwind_Category_Walker(),
                );
                wp_list_categories($args);
                ?>
            </ul>
        </div>
        <div>
	        <?php
	        if (has_post_thumbnail()) {
		        the_post_thumbnail('full');
	        }
	        ?>
        </div>
      </div>
      <div class="mt-12 prose">
	      <?php the_content(); ?>
      </div>
	</section>
</main>
<?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
<?php wp_footer(); ?>
