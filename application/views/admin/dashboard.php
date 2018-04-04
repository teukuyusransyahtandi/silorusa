<div class="br-pagebody mg-t-5 pd-x-30">
  <div class="row row-sm">
    <div class="col-sm-6 col-xl-3">
      <div class="bg-teal rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Daftar Rumah Sakit</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">3</p>
          </div>
        </div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
      <div class="bg-danger rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Daftar Apotek</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">3</p>
          </div>
        </div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
      <div class="bg-primary rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Daftar Dokter Spesialis</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">3</p>
          </div>
        </div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
      <div class="bg-br-primary rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Data</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">9</p>
          </div>
        </div>
      </div>
    </div><!-- col-3 -->
  </div><!-- row -->

  <div class="row row-sm mg-t-20">
    <div class="col-8">
      <div class="card pd-0 bd-0 shadow-base">
        <div class="pd-x-30 pd-t-30 pd-b-15">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Peta</h6>
            </div>
          </div><!-- d-flex -->
        </div>
        <div class="pd-x-15 pd-b-15">
   <div id="map" class="ht-300 ht-sm-400 bd bg-gray-100"></div>

      </div>
    </div><!-- card -->

  </div><!-- col-9 -->
  <div class="col-4">


    <div class="card bd-0 shadow-base pd-30">
      <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">FASILITAS</h6>
      <p class="mg-b-25">Pilih Kategori Fasilitas</p>
      <select class="form-control select2-show-search" >
        <option value="Firefox">--Kategori Fasilitas--</option>
        <option value="Firefox">Rumah Sakit</option>
        <option value="Chrome">Apotik</option>
        <option value="Safari">Praktik Umum</option>
      </select>
    </div>
  </div>

  <div class="mg-t-20 tx-13">
    <a href="" class="tx-gray-600 hover-info">Generate Report</a>
    <a href="" class="tx-gray-600 hover-info bd-l mg-l-10 pd-l-10">Print Report</a>
  </div>
</div><!-- card -->





</div><!-- col-3 -->
</div><!-- row -->

</div>
<script>
     var map;
      var infowindow;

      function initMap() {
        var aceh = {lat: 5.565438, lng: 95.337018};

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

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: aceh,
          radius: 500,
          type: ['hospital']
        }, callback);
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          icon: '../assets/img/icon.png',
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZvI-vrex6zb3-tX75hJNUqRC8VZc3dUE&libraries=places&callback=initMap" async defer></script>