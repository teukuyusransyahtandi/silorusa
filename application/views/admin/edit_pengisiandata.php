<?php 
    foreach ($data as $v):
    echo form_open("proses/proses_edit_pengisian_data_rs/$v->id_lokasi"); 
?>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nama Rumah Sakit </label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email"  name="nama_lokasi" value='<?php echo $v->nama_lokasi ?>' >
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Jam Buka</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" placeholder="Isi alamat rumah sakit" name="jam_buka" value='<?php echo $v->jam_buka ?>'>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nomor Hp</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="email" placeholder="Isi alamat rumah sakit" name="nomor_hp" value='<?php echo $v->nomor_hp ?>'>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Address</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="address" placeholder="Isi alamat rumah sakit" name="alamat_lokasi" value='<?php echo $v->alamat_lokasi ?>'>
		</div>
	</div>

		<div class="form-group">
		<label class="control-label col-sm-2" for="email">Latitude</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="latitude" placeholder="Isi alamat rumah sakit"  name="latitude" step="any" value='<?php echo $v->latitude ?>'>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Longitude</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="longitude" placeholder="Isi alamat rumah sakit"  name="longitude" step="any" value='<?php echo $v->longitude ?>'>
		</div>
	</div>


	<div class="form-group " >
		<div class="br-pagebody ">
			<div id="myMap" class="ht-300 ht-sm-600 bd bg-gray-100"></div>
		</div><!-- br-pagebody -->
	</div><!-- br-pagebody -->

	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
<?php 
	echo form_close(); 
	endforeach;
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZvI-vrex6zb3-tX75hJNUqRC8VZc3dUE&v=3.exp&sensor=false">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script type="text/javascript"> 
	var map;
	var marker;
	var myLatlng = new google.maps.LatLng(5.565438,95.337018);
	var geocoder = new google.maps.Geocoder();
	var infowindow = new google.maps.InfoWindow();
	function initialize(){
		var mapOptions = {
			zoom: 18,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

		marker = new google.maps.Marker({
			map: map,
			position: myLatlng,
			draggable: true 
		}); 

		geocoder.geocode({'latLng': myLatlng }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[0]) {
					$('#latitude,#longitude').show();
					$('#address').val(results[0].formatted_address);
					$('#latitude').val(marker.getPosition().lat());
					$('#longitude').val(marker.getPosition().lng());
					infowindow.setContent(results[0].formatted_address);
					infowindow.open(map, marker);
				}
			}
		});

		google.maps.event.addListener(marker, 'dragend', function() {

			geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					if (results[0]) {
						$('#address').val(results[0].formatted_address);
						$('#latitude').val(marker.getPosition().lat());
						$('#longitude').val(marker.getPosition().lng());
						infowindow.setContent(results[0].formatted_address);
						infowindow.open(map, marker);
					}
				}
			});
		});

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>


