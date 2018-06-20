<?php 
foreach ($data as $v):
	echo form_open("proses/proses_edit_data_dokter/$v->id_dokter");
	?>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nama Dokter</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" name="nama_dokter" placeholder="Isi nama dokter" value='<?php echo $v->nama_dokter; ?>'>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Spesialis</label>
		<div class="col-sm-10">
			<select class="form-control"  id="email"  name="spesialis">
				<option value='<?php echo $v->nama_spesialis; ?>'><?php echo $v->nama_spesialis; ?></option>
				<?php 
				foreach ($data1 as $f):
					?>
					<option value='<?=$f->id?>'><?= $f->nama_spesialis ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nomor HP</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="email" name="nomor_hp" placeholder="Isi no telp" value='<?php echo $v->nomor_hp; ?>'>
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