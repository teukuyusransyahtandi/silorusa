<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title><?= $title_page ?></title>

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
  <div class="br-logo"><a href="<?= base_url() ?>"><span>|</span>silorusa<span>|</span></a></div>
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
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
       
      </div><!-- br-header-left -->

      <?php
      if(! $this->session->userdata('nama')){
        ?>
          <div class="pd-10">
            <a href="<?= base_url('register') ?>" class="btn btn-primary bd-0 btn-compose"><i class="fa fa-sign-in"></i> Register</a>
            <a href="<?= base_url('login') ?>" class="btn btn-primary bd-0 btn-compose"><i class="fa fa-sign-in"></i> Login</a>
          </div>
        <?php
      }else{
        ?>
        <div class="br-header-right">
       <nav class="nav">
        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down"><?= $this->session->userdata('nama') ?></span>
            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
              <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
              <li><a href="<?= base_url('proses/proses_logout') ?>"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
     </div>
        <?php
      }
      ?>
      
      </nav>
    </div>