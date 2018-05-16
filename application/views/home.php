<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Silorusa</title>

  <!-- vendor css -->
  <link href="<?php echo base_url('assets/'); ?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>lib/highlightjs/github.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>lib/datatables/jquery.dataTables.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/'); ?>lib/select2/css/select2.min.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bracket.css">
</head>


  <body>
  <div class="br-logo"><a href=""><span>|</span>silorusa<span>|</span></a></div>
  <div class="br-sideleft overflow-y-auto ps ps--theme_default ps--active-x ps--active-y" data-ps-id="f6cfb3d3-5bdb-23da-a463-74615b0b80d0">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <?php echo form_open('', array('id' => 'searchForm'));?>
      <div class="br-sideleft-menu">
       <div class=" pd-y-10">
            <?php echo form_dropdown('kategori', $kategori, 0,'class="form-control" id="fasilitas"');?>

      </div>
      <div class=" pd-y-10" id="spesialis" style="display: none;">
       <?php echo form_dropdown('spesialis', $spesialis, 0,'class="form-control" id="fasilitas"');?>
      </div>
      <div class=" pd-y-10">
        <button type="button" id="searchButton" class="btn btn-block btn-primary bd-0 btn-compose">Search</button>
      </div>
        
      </div><!-- br-sideleft-menu -->
      <?php echo form_close();?>
      <br>
    <div class="ps__scrollbar-x-rail" style="width: 230px; left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 229px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 690px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 553px;"></div></div></div>

    <div class="br-header">
      <div class="br-header-left">
      </div><!-- br-header-left -->
      <div class="pd-10">
        <a href="<?= base_url('login') ?>" class="btn btn-primary bd-0 btn-compose"><i class="fa fa-sign-in"></i> Login</a>
      </div>
    </div>
    <div class="br-mainpanel">
      <div id="map" style="width: 100%; height: 100%;"></div>
    </div><!-- br-mainpanel -->
  <!-- <div id="map" style="width: 100%; height: 100%;"></div> -->
  <script src="<?php echo base_url('assets/'); ?>lib/jquery/jquery.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/bootstrap/bootstrap.js"></script>

<script src="<?php echo base_url('assets/'); ?>lib/select2/js/select2.min.js"></script>
<script>
  $('.select2-show-search').select2({
      minimumResultsForSearch: ''
    });
</script>
<script src="<?php echo base_url('assets/'); ?>js/bracket.js"></script>
<script>
     var base_url = '<?php echo base_url();?>';
     var map;
      var infowindow;

      function initMap() {
        var aceh = {lat: 5.565438, lng: 95.337018};
        infowindow = new google.maps.InfoWindow();

        map = new google.maps.Map(document.getElementById('map'), {
          center: aceh,
          zoom: 15,
          styles: [
              {
            featureType: 'poi',
            stylers: [{visibility: 'off'}]
          },
          {
            featureType: 'transit',
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          }
            ]
        });

         $.ajax({
              type: "POST",
              url: "home/search",
              success: function(respons) {
                data = JSON.parse(respons);
               for (i=0; i <= data.length-1; i++) {
                   latlng = new google.maps.LatLng(data[i].latitude, data[i].longitude);
                   if(data[i].nama_kategori == 'Rumah Sakit'){
                      label = 'rumah_sakit.png';
                   }else{
                      label = 'praktik.png';
                   }
                   
                   var marker = new google.maps.Marker({
                      map: map,
                      icon: 'assets/img/label/'+label,
                      position: latlng
                    });

                   var description = '<b>'+data[i].nama_lokasi+'<b><hr><b>Jam Buka : '+data[i].jam_buka+'</b><br><b>Telp : '+data[i].nomor_hp+'</b><hr><a href="'+base_url+'detail/'+data[i].id_lokasi+'">Lihat Detail Lokasi</a>';

                    google.maps.event.addListener(marker, 'click', function() {

                      infowindow.setContent(description);
                      infowindow.open(map, this);
                    });
                }
                // alert(respons.nama_lokasi);
                //  marker = new google.maps.Marker({
                //     position: new google.maps.LatLng(respons.lat, respons.long),
                //     map: map,
                //     title: 'test'
                // });

                // $.each(respons, function(key, value){
                //   // latlng = new google.maps.LatLng(key.latitude, key.longitude),
                //   alert(key.nama_lokasi);
                // });
              }
            });
      }

        // infowindow = new google.maps.InfoWindow();
        // var service = new google.maps.places.PlacesService(map);
      //   service.nearbySearch({
      //     location: aceh,
      //     radius: 500,
      //     type: ['hospital']
      //   }, callback);
      // }

      // function callback(results, status) {
      //   if (status === google.maps.places.PlacesServiceStatus.OK) {
      //     for (var i = 0; i < results.length; i++) {
      //       createMarker(results[i]);
      //     }
      //   }
      // }

      function createMarker(latLng, myLabel) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          icon: 'assets/img/label/'+myLabel,
          position: latLng
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }

      $('#fasilitas').change(function() {
        fasilitas = $(this).val();

        if(fasilitas == '2'){
          $('#spesialis').show();
        }else{
          $('#spesialis').hide();
        }

      });

      $('#searchButton').click(function(){
        var data = $('#searchForm').serialize();
        $.ajax({
          type: "POST",
          url: "home/search",
          data: {data: data},
          success: function(respons) {
            alert(respons);
          }
        });
      });


    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZvI-vrex6zb3-tX75hJNUqRC8VZc3dUE&callback=initMap" async defer></script>

  </body>










