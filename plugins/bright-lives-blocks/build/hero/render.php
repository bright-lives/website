<?php
/**
 *  PHP file to use when rendering the block type on the server to show on the front end.
 *
 *  The following variables are exposed to the file:
 *      $attributes (array): The block attributes.
 *      $content (string): The block default content.
 *      $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 *
 * The wp_kses_post function is used to ensure any HTML that is not allowed in a post will be escaped.
 *
 * @see https://developer.wordpress.org/reference/functions/wp_kses_post/
 * @see https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/#escaping-securing-output
 */

print_r('<pre>');
//print_r($block ?? []);
$title = $block->attributes['title'] ?? '';
print_r($title);
print_r('</pre>');
?>
<div <?php echo wp_kses_data(get_block_wrapper_attributes([
    'class' => 'h-screen bg-amber-200 flex p-20',
])); ?>>
	<?php echo $content ?? [] ?>
</div>
