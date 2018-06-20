<?php 
foreach ($data as $v):
	echo form_open("proses/proses_edit_data_kategori_lokasi/$v->id_lokasi"); 
	?>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nama Lokasi</label>
		<div class="col-sm-10">
			<input type="text"  readonly class="form-control" id="email" name="lokasi" value='<?php echo $v->nama_lokasi; ?>'>
		</div>
	</div>


	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Kategori</label>
		<div class="col-sm-10">
			<select class="form-control"  id="email"  name="kategori">
				<option value="$v->id_kategori"><?php echo $v->nama_kategori; ?></option>
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
	<?php 
	endforeach;
	echo form_close();
?>