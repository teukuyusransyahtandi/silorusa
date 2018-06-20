<?php echo form_open('proses/proses_pengisian_data_dokter_tempat'); ?>

<div class="form-group">
	<label class="control-label col-sm-2" for="email">Nama Dokter</label>
	<div class="col-sm-10">
		<select class="form-control"  id="email"  name="nama_dokter">
			<option value="#">Pilih Dokter</option>
			<?php 
			foreach ($data as $v):
			?>
				<option value='<?=$v->id_dokter?>'><?= $v->nama_dokter ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" for="email">Lokasi</label>
	<div class="col-sm-10">
		<select class="form-control"  id="email"  name="lokasi">
			<option value="#">Pilih Lokasi</option>
			<?php 
			foreach ($data2 as $f):
			?>
				<option value='<?=$f->id_lokasi?>'><?= $f->nama_lokasi ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>


<div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
<?php echo form_close(); ?>