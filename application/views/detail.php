 <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page ">

      <div class="card shadow-base bd-0 rounded-0 widget-4">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="" class="mg-r-10"><span class="tx-medium"><?= count($review) ?></span> Comments</a>
          </div>
          <div class="tx-24 hidden-xs-down">
            <a href="" class="mg-r-10"><i class="icon ion-ios-email-outline"></i></a>
            <a href=""><i class="icon ion-more"></i></a>
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            <img src="http://via.placeholder.com/280x280" alt="">
          </div><!-- card-profile-img -->
          <h4 class="tx-normal tx-roboto tx-white"><?= $tempat->nama_lokasi?></h4>

          <p class="mg-b-0 tx-24">
            <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-facebook-official"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-twitter"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-pinterest"></i></a>
            <a href="" class="tx-white-8"><i class="fa fa-instagram"></i></a>
          </p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
        <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
<!--           <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Photos</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Favorites</a></li> -->
          <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#" role="tab">Settings</a></li>
        </ul>
      </div>

      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="reviews">
          <div class="row">
            <div class="col-lg-8">
              <div class="media-list bg-white rounded shadow-base">
                <?php
                  if(!empty($review)){
                  foreach ($review as $r) {
                ?>
                <div class="media pd-20 pd-xs-30">
                  <img src="http://via.placeholder.com/280x280" alt="" class="wd-40 rounded-circle">
                  <div class="media-body mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-inverse tx-14"><?= $r->username ?></h6>
                        <span class="tx-12 tx-gray-500">@<?= $r->username ?></span>
                      </div>
                      <span class="tx-12">2 minutes ago</span>
                    </div><!-- d-flex -->
                    <p class="mg-b-20"><?= $r->comment ?></p>
                  </div><!-- media-body -->
                </div><!-- media -->
                <?php
                  }}else{
                ?>

                <div class="bg-white pd-y-12 tx-center shadow-base rounded">
                <a href="" class="tx-gray-600 hover-info">Tidak Ada Review</a>
              </div>

              <?php } ?>
              </div><!-- card -->
              
                 <?php
                  if(! $this->session->userdata('nama')){
                    ?>
                   <div class="bg-white pd-y-12 mg-t-15 tx-center shadow-base rounded">
                  <a href="" class="tx-gray-600 hover-info">Harus Login apabila ingin review</a>
                </div>
                <?php
                  }else{
                    ?>
                    <div class="bg-white pd-y-12 tx-center mg-t-15 mg-xs-t-30 shadow-base rounded form-layout form-layout-4">
                      <?= form_open('home/add_review') ?>
                    <div class="row">
                  <div class="col-sm-10 mg-t-11 mg-sm-t-0">
                    <?= form_hidden('id_lokasi', $id_lokasi) ?>
                    <input type="text" name="isi" class="form-control" placeholder="Silakan Masukkan Review Anda" required="required">
                  </div>
                  <button class="btn btn-primary" type="submit">submit</button>
                  <?= form_close()?>
                </div><!-- row -->

              </div>
                    <?php
                  }
                ?>
            </div><!-- col-lg-8 -->
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Contact Information</h6>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">No Telepon</label>
                <p class="tx-info mg-b-25"><?= $tempat->nomor_hp?></p>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Jam Buka</label>
                <p class="tx-inverse mg-b-25"><?= $tempat->jam_buka?></p>

                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Alamat</label>
                <p class="tx-inverse mg-b-25"><?= $tempat->alamat_lokasi?> </p>

              </div><!-- card -->

              <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
                <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-30">Daftar Dokter Praktik</h6>
                <div class="media-list">
                  <?php
                    if(!empty($dokter)){
                      foreach ($dokter as $d) {
                        $spesialis = $d->spesialis != 'umum' ? 'spesialis '.$d->spesialis : 'dokter umum';
                       ?>
                         <div class="media align-items-center pd-b-10">
                            <img src="http://via.placeholder.com/280x280" class="wd-45 rounded-circle" alt="">
                            <div class="media-body mg-x-15 mg-xs-x-20">
                              <h6 class="mg-b-2 tx-inverse tx-14"><?= $d->nama_dokter ?></h6>
                              <p class="mg-b-0 tx-12"><?= ucwords($spesialis) ?></p>
                            </div><!-- media-body -->
                            <a href="#" class="btn btn-outline-secondary btn-icon rounded-circle mg-r-5">
                              <div><i class="fa fa-search-plus tx-16"></i></div>
                            </a>
                          </div><!-- media -->
                       <?php
                      }
                    }else{
                      ?>
                       <div class="media align-items-center pd-b-10">
                            <div class="media-body mg-x-15 mg-xs-x-20">
                              Belum Ada dokter yang terdaftar
                            </div><!-- media-body -->
                          </div><!-- media -->
                      <?php
                    }
                  ?>
                </div><!-- media-list -->
              </div>
              <!-- card -->
            </div><!-- col-lg-4 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->