<?php
if (isset($args) && is_array($args)) {
	$kind   = $args['kind'];
	$item    = $args['item'];
	$amount    = $args['amount'];
	$unitPrice = $args['unitPrice'];
	$totalPrice = $args['totalPrice'];
    $lastRow = $args['lastRow'] ?? false;
}

$lastRowClass = $lastRow ? ' font-bold' : '';
?>
<tr class="border-t border-primary-500 <?php echo $lastRowClass ?>">
	<td class="py-3"><?php echo $kind ?></td>
	<td class="py-3"><?php echo $item ?></td>
	<td class="py-3 tabular-nums text-right"><?php echo $amount ?></td>
	<td class="p-3 tabular-nums">
		<div class="flex justify-between">
            <div><?php echo $lastRow ? '' : '€' ?></div>
			<div><?php echo $unitPrice ?></div>
		</div>
	</td>
	<td class="p-3 tabular-nums">
		<div class="flex justify-between">
			<div>€</div>
			<div><?php echo $totalPrice ?></div>
		</div>
	</td>
</tr>