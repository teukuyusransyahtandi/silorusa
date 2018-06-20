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
        <li class="nav-item"><a href="<?= base_url('admin/lihatdata') ?>" class="nav-link">Rumah Sakit & Dokter</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/lihatdatadokter') ?>" class="nav-link">Daftar Nama Dokter</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/lihatdatakategorilokasi') ?>" class="nav-link">Daftar Kategori Lokasi</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/lihatdataspesialis') ?>" class="nav-link">Jenis Spesialis </a></li>
      </ul>

      <a href="#" class="br-menu-link">
        <div class="br-menu-item">
          <i class="fa fa-plus"></i>
          <span class="menu-item-label">Pengisian Data</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandata') ?>" class="nav-link">Lokasi</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandatakategorilokasi') ?>" class="nav-link">Kategori Lokasi</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandataspesialis') ?>" class="nav-link">Jenis Spesialis</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandatadokter') ?>" class="nav-link">Dokter</a></li>
        <li class="nav-item"><a href="<?= base_url('admin/pengisiandatadokterdantempat') ?>" class="nav-link">Dokter dan Tempat prakteknya </a></li>
      </ul>



    </div><!-- br-sideleft-menu -->

    <br>
  </div><!-- br-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->