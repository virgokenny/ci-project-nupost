<?php if (!isset($js_list)) $js_list = array(); ?>
<?php foreach ($js_list as $js): ?>
	<script src="<?=base_url()?>js/<?=$js?>.js"></script>
<?php endforeach; ?>
