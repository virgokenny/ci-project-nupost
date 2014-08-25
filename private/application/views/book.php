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
	<form id="newfile-form" action="<?=base_url()?>app/newfile/<?=$title?>" method="post"> 
		<div class="row form-group">
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<span class="glyphicon glyphicon-file"></span>
							<span>New File</span>
						</button>
					</span>   
					<input type="text" class="form-control" name="input_text_field">
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</form>
	<form id="deletefile-form" action="<?=base_url()?>app/deletefile/<?=$title?>" method="post">
		<ul class="list-group">
			<button class="btn btn-default" type="submit">
				<span class="glyphicon glyphicon-trash"></span>
				<span>Delete Files</span>
			</button>			
			<?php foreach ($doc_list as $doc): ?>
			<li class="list-group-item">
			<div class="input-group">
			<span class="col-md-1 text-danger"><strong><?=$doc['status']?></strong></span>
			<span class="col-md-1"><input type="checkbox" name="file_list[]" value=<?=$doc['name']?>></span>
			<span class="col-md-1 glyphicon glyphicon-file"></span>
			<a href="../doc/<?=$title?>/<?=$doc['name']?>"><?=$doc['name']?></a>
			</div><!-- /input-group -->
			</li>
			<?php endforeach; ?>
		</ul>
	</form>
</div>
