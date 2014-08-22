<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?=$title?> - NuPoST</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<?php $this->load->view('layout/css_loader'); ?>
	<style>
		body {padding-top: 30px}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?=base_url()?>">NuPoST</a>
			</div>
			<a class="btn btn-default navbar-btn pull-right" href="//nupost.nuuo.com:80/">
				<span>GitLab</span>
				<span class="glyphicon glyphicon-arrow-right"></span>
			</a>
		</div>
	</nav>
	<?php $this->load->view($page) ?>
	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<?php $this->load->view('layout/js_loader'); ?>
</body>
</html>
