<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_header(); ?>
    <body <?php body_class(); ?>>
        <?php get_template_part( 'template-parts/page-header/page-header' ); ?>
        <main class="prose lg:prose-xl">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <article>
                <?php the_content(); ?>
              </article>
            <?php endwhile; endif; ?>
        </main>
        <?php get_template_part( 'template-parts/page-footer/page-footer' ); ?>
        <?php wp_footer(); ?>
    </body>
</html>
