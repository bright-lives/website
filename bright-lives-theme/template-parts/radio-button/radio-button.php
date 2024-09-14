<?php
if (isset($args) && is_array($args)) {
	$text   = $args['text'];
	$name   = $args['name'];
    $id     = $args['id'];
	$siblingId = $args['siblingId'];
    $checked = isset($args['checked']) ? $args['checked'] : false;
}
?>

<input type="radio" id="<?php echo $id ?>" name="<?php echo $name ?>" class="hidden peer/option<?php echo $siblingId ?>" <?php echo $checked ? 'checked' : '' ?> />
<label for="<?php echo $id ?>" class="w-full text-center px-4 py-2  bg-gray-200 rounded cursor-pointer peer-checked/option<?php echo $siblingId ?>:bg-blue-500 peer-checked/option<?php echo $siblingId ?>:text-white">
	<?php echo $text ?>
</label>

