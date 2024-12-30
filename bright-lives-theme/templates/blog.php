<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Bright lives
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
     <?php get_header(); ?>
     <body <?php body_class(); ?>>
        <?php get_template_part( 'template-parts/page-header/page-header' ); ?>
        <div class="relative bg-fixed bg-center bg-cover pt-80 min-h-[430px]">
            <div class="z-1 absolute inset-0 bg-radial-gradient-opacity"></div>
            <div class="container mx-auto flex">
                <h1 class="z-10 text-white text-7xl leading-normal font-display"><?php the_title() ?></h1>
            </div>
        </div>
        <main class="bg-slate-200 flex pb-20">
            <?php the_content(); ?>
            <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 m-16 gap-y-20 bg-slate-200">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                );
                $news_query = new WP_Query($args);
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                ?>
                    <article class="items-center p-20 bg-white">
                        <h2 class="text-2xl leading-normal font-serif mb-6">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="mb-8">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="text-primary-500 hover:underline flex">
                      <span class="flex">
                        <?php esc_html_e('Lees meer', 'bright-lives'); ?>
                      </span>
                            <span class="flex pl-2">
                          <img src="<?php echo get_template_directory_uri() . '/assets/icons/arrow-right.svg' ?>"
                               class="filter filter-white"
                               alt="link icon"
                               width="16"
                               height="16">
                        </span>
                        </a>
                    </article>
                    <div class="bg-slate-500">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-full')); ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; wp_reset_postdata(); else : ?>
                    <p><?php esc_html_e('No news found.', 'bright-lives'); ?></p>
                <?php endif; ?>
            </section>
        </main>
        <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
        <?php wp_footer(); ?>
    </body>
</html>
