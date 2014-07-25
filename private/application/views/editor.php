<div class="container-fluid">
	<form id="save-form" action="<?=base_url()?>app/save/<?=$book?>/<?=$title?>" method="post">
		<div class="form-group">
			<div class="page-header">
				<h1>
					<span><?=$title?></span>
					<button class="btn btn-default btn-lg pull-right" type="submit">
						<span id="saved" class="glyphicon glyphicon-saved" style="display:none;"></span>
						<span>Save</span>
					</button>
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
