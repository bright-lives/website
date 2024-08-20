<?php
if (isset($args) && is_array($args)) {
	$title = $args['title'];
	$fullHeight = $args['full-height'];
    $tailwindBackgroundImage = $args['tailwind-background-image'];
}
$classes = $tailwindBackgroundImage;
$classes .= $fullHeight ? ' h-screen' : ' h-60vh';
?>

<div class="relative bg-fixed bg-center bg-cover pt-80 <?php echo $classes; ?>">
    <div class="z-1 absolute inset-0 bg-radial-gradient-opacity"></div>
	<div class="container mx-auto flex">
		<h1 class="z-10 text-white text-7xl leading-normal font-display"><?php echo $title ?></h1>
	</div>
</div>