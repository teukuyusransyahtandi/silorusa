  <!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href=""><span></span>Admin Silorusa<span></span></a></div>
  <div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
      <a href="<?= base_url('admin/dashboard') ?>" class="br-menu-link">
        <div class="br-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->

      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="fa fa-eye"></i>
          <span class="menu-item-label">Lihat Data</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="<?= base_url('admin/lihatdata') ?>" class="nav-link">Rumah Sakit</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/lihatdata_apotek') ?>" class="nav-link">Apotek</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/lihatdatadokter') ?>" class="nav-link">Dokter Spesialis</a></li>
      </ul>

      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="fa fa-plus"></i>
          <span class="menu-item-label">Pengisian Data</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandata') ?>" class="nav-link">Rumah Sakit</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandata_apotek') ?>" class="nav-link">Apotek</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandatadokter') ?>" class="nav-link">Dokter Spesialis</a></li>
      </ul>



    </div><!-- br-sideleft-menu -->

    <br>
  </div><!-- br-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->