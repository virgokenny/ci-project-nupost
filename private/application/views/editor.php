<div class="container">
	<form action="<?=base_url()?>app/save" method="post">
		<div class="form-group">
			<div class="page-header">
				<h1>
					<span><?=$title?></span>
					<button class="btn btn-default pull-right" type="submit">Save</button>
				</h1>
			</div>
		</div>
		<div class="form-group">
			<textarea id="editor" class="form-control" name="document"><?=$document?></textarea>
		</div>
	</form>
</div>
