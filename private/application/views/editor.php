<div class="container">
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
			<div id="preview" class="col-lg-6 form-group">
				<span>preview</span>
			</div>
		</div>
	</form>
</div>
