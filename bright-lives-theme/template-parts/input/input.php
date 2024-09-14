<?php
if (isset($args) && is_array($args)) {
	$labelText = $args['labelText'];
	$type = $args['type'] ? $args['type'] : 'text';
	$placeholder = $args['placeholder'];
	$id = $args['id'];
}
?>

<label for="<?php echo $id ?>" class="hidden"></label>
<input id="<?php echo $id ?>" type="<?php echo $type ?>" placeholder="<?php echo $placeholder ?>" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500" />
