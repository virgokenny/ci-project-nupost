<div class="container">
	<div class="page-header">
		<h1>
			<span><?=$title?></span>
			<div class="btn-group pull-right">
				<a href="../private/repo/<?=$title?>/_build/html/" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-globe"></span>
					<span>Site</span>
				</a>
				<a href="../private/repo/<?=$title?>/_build/slides/" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-facetime-video"></span>
					<span>Slide</span>
				</a>
				<a href="../app/download/<?=$title?>" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-download-alt"></span>
					<span>PDF</span>
				</a>
			</div>
		</h1>
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
