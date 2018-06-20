<?php echo form_open('proses/proses_pengisian_data_jenis_spesialis'); ?>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Jenis Spesialis</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" placeholder="Isi Jenis Spesialis" name="jenis_spesialis">
		</div>
	</div>

	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>