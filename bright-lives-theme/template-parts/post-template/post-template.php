<article class="p-10 lg:p-20 bg-white flex flex-col">
	<h2 class="text-2xl leading-normal font-serif mb-6 hover:text-primary-500">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<div class="mb-8 prose flex-grow">
		<?php the_excerpt(); ?>
	</div>
	<div class="block">
		<ul>
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
</article>
<div class="bg-slate-500 bg-cover bg-center h-[500px]">
    <?php if (has_post_thumbnail()) : ?>
    <div class="bg-slate-500 bg-cover bg-center h-[500px]"
         style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>');">
        <a href="<?php the_permalink(); ?>" class="block h-full w-full"></a>
    </div>
    <?php endif; ?>
</div>
