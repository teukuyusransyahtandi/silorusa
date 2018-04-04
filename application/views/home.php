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
      <div class="br-sideleft-menu">
       <div class="d-md-flex pd-y-10 pd-md-y-0">
           <select class="form-control select2-show-search" >
              <option value="Firefox">--Kategori Fasilitas--</option>
              <option value="Firefox">Rumah Sakit</option>
              <option value="Chrome">Apotik</option>
              <option value="Safari">Praktik Umum</option>
            </select>
      </div>
        
      </div><!-- br-sideleft-menu -->

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

  </body>

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
      function initMap() {
        var aceh = {lat: 5.565438, lng: 95.337018};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: aceh
        });
        var marker = new google.maps.Marker({
          position: aceh,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb1Y4IoOhDsxXYVDHTpGKOc-NnJkI3wtM&callback=initMap">
    </script>







