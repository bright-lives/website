<?php
if (isset($args) && is_array($args)) {
	$text   = $args['text'];
	$border = $args['border'];
	$invert = isset($args['invert']) ? $args['invert'] : false;
}

$border_classes = $border ? ($invert ? 'border-2 border-white hover:border-black p-4' : 'border-2 border-black hover:border-white p-4') : 'py-4 border-2 border-transparent';
$color_classes = $invert ? 'text-black hover:text-black' : 'text-black hover:text-white';
?>
<button class="inline-flex w-auto min-w-56 font-serif <?php echo $color_classes ?> <?php echo $border_classes ?>">
	<span class="flex"><?php echo esc_html($text); ?></span>
	<span class="flex pl-2">
        <img src="<?php echo get_template_directory_uri() . '/assets/icons/arrow-right.svg' ?>"
             class="filter filter-white"
             alt="button icon"
             width="16"
             height="16" />
    </span>
</button>
