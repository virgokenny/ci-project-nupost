<div class="container">
	<div class="page-header">
		<h1>Books</h1>
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
