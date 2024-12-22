<?php
if (isset($args) && is_array($args)) {
	$title = $args['title'];
}
?>
<div class="relative bg-fixed bg-center bg-cover pt-80 min-h-[430px]"><!-- h-60vh max-h-[500px] -->
	<div class="z-1 absolute inset-0 bg-radial-gradient-opacity"></div>
	<div class="container mx-auto flex">
		<h1 class="px-10 md:px-0 z-10 text-white text-4xl lg:text-7xl leading-normal font-display">
			<?php echo $title ?>
		</h1>
	</div>
</div>