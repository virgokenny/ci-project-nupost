<div class="container">
	<div class="page-header">
		<h1><?=$title?></h1>
	</div>
	<ul class="list-group">
		<?php foreach ($doc_list as $doc): ?>
			<li class="list-group-item">
				<span class="glyphicon glyphicon-file"></span>
				<a href="../doc/<?=$title?>/<?=$doc?>"><?=$doc?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
