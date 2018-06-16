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
      var markers = [];

      function initMap() {
        var aceh = {lat: 5.565438, lng: 95.337018};
        infowindow = new google.maps.InfoWindow();

        map = new google.maps.Map(document.getElementById('map'), {
          center: aceh,
          zoom: 12,
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
                  var latlng = new google.maps.LatLng(data[i].latitude, data[i].longitude);
                  var label = data[i].gambar_label
                  var description = '<b>'+data[i].nama_lokasi+'<b><hr><b>Jam Buka : '+data[i].jam_buka+'</b><br><b>Telp : '+data[i].nomor_hp+'</b><hr><a href="'+base_url+'detail/'+data[i].id_lokasi+'">Lihat Detail Lokasi</a>';

                  createMarker(latlng, label, description);
                   
                  
                }
                setMapOnAll(map);
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

      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

      function clearMarkers(){
        setMapOnAll(null);
        markers = [];
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

      function createMarker(latLng, myLabel, content) {
        var marker = new google.maps.Marker({
          map: map,
          icon: 'assets/img/label/'+myLabel,
          position: latLng
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(content);
          infowindow.open(map, this);
        });

        markers.push(marker);
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
              clearMarkers();
             data = JSON.parse(respons);
               for (i=0; i <= data.length-1; i++) {
                   var latlng = new google.maps.LatLng(data[i].latitude, data[i].longitude);
                   var label = data[i].gambar_label
                   var description = '<b>'+data[i].nama_lokasi+'<b><hr><b>Jam Buka : '+data[i].jam_buka+'</b><br><b>Telp : '+data[i].nomor_hp+'</b><hr><a href="'+base_url+'detail/'+data[i].id_lokasi+'">Lihat Detail Lokasi</a>';

                    createMarker(latlng, label, description);
                }
                setMapOnAll(map);

          }
        });
      });


    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZvI-vrex6zb3-tX75hJNUqRC8VZc3dUE&callback=initMap" async defer></script>

  </body>