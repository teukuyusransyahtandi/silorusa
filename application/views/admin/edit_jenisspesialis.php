<?php 
 foreach ($data as $v):
 	echo form_open("proses/proses_edit_jenis_spesialis/$v->id");
 ?>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Jenis Spesialis</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" placeholder="Isi Jenis Spesialis" name="jenis_spesialis" value='<?php echo $v->nama_spesialis ?>'>
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