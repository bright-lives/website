
<?php
if (isset($args) && is_array($args)) {
	$text   = $args['text'];
	$url    = $args['url'];
	$border = $args['border'];
	$invert = isset($args['invert']) ? $args['invert'] : false;
}

$border_classes = $border ? ($invert ? 'border-2 border-white hover:border-primary-500 p-4' : 'border-2 border-black hover:border-white p-4') : 'py-4 border-2 border-transparent';
$color_classes = $invert ? 'text-white hover:text-primary-500' : 'text-black hover:text-white';
?>
<a href="<?php echo $url ?>" class="group inline-flex font-serif <?php echo $color_classes ?> <?php echo $border_classes ?>">
	<span class="flex"><?php echo esc_html($text); ?></span>
	<span class="flex pl-2">
        <img src="<?php echo get_template_directory_uri() . '/assets/icons/arrow-right.svg' ?>"
             alt="link icon"
             width="16"
             height="16">
    </span>
</a>