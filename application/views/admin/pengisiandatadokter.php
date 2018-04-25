<?php echo form_open('proses/proses_pengisian_data_dokter'); ?>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nama Dokter</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="nama_dokter" placeholder="Isi nama dokter">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Spesialis</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="spesialis" placeholder="Isi spesialis">
		</div>
	</div>

		<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nomor HP</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="nomor_hp" placeholder="Isi no telp">
		</div>
	</div>


	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
  <?php echo form_close(); ?>