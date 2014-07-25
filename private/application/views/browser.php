<div class="container">
	<div class="page-header">
		<h1>
			<form id="import-form" class="form-inline pull-right" action="app/import">
				<div class="form-group input-group">
					<input class="form-control" type="file">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">Import</button>
					</div>
				</div>
			</form>
			<span>Books</span>
		</h1>
	</div>
	<ul class="list-group">
		<?php foreach ($repo_list as $repo => $info): ?>
			<li class="list-group-item">
				<span class="glyphicon glyphicon-book"></span>
				<a href="book/<?=$repo?>"><?=$repo?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
