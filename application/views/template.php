<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('head');
?>

<body>
<?php
$this->load->view('leftpanel');
?>

<?php
$this->load->view('headpanel');
?>

<?php
$this->load->view('rightpanel');
?>
  

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      </div>

      <div class="br-pagebody">

       <?php $this->load->view($content); ?>
       <?php $this->load->view('modal'); ?>

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php
$this->load->view('footer');
?>
  </body>
  </html>
