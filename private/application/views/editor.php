<div class="container-fluid">
	<form action="<?=base_url()?>app/save/<?=$book?>/<?=$title?>" method="post">
		<div class="form-group">
			<div class="page-header">
				<h1>
					<span><?=$title?></span>
					<button class="btn btn-default pull-right" type="submit">Save</button>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 form-group">
				<textarea id="editor" class="form-control" name="document"><?=$document?></textarea>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div id="preview" class="panel-body">
						<span>previewing...</span>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
