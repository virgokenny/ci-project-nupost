<?php if (!isset($css_list)) $css_list = array(); ?>
<?php foreach ($css_list as $css): ?>
	<link rel="stylesheet" href="<?=base_url()?>css/<?=$css?>.css">
<?php endforeach; ?>
