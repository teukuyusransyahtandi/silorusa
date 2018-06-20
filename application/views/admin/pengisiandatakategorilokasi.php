<?php echo form_open('proses/proses_pengisian_data_kategori_lokasi'); ?>

<div class="form-group">
	<label class="control-label col-sm-2" for="email">Lokasi</label>
	<div class="col-sm-10">
		<select class="form-control"  id="email"  name="lokasi">
			<option value="#">Pilih lokasi</option>
			<?php 
			foreach ($data1 as $v):
				?>
				<option value='<?=$v->id_lokasi?>'><?= $v->nama_lokasi ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>


<div class="form-group">
	<label class="control-label col-sm-2" for="email">Kategori</label>
	<div class="col-sm-10">
		<select class="form-control"  id="email"  name="kategori">
			<option value="#">Pilih Kategori</option>
			<?php 
			foreach ($data2 as $f):
				?>
				<option value='<?=$f->id_kategori?>'><?= $f->nama_kategori ?></option>
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