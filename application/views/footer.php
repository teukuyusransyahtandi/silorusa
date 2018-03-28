
<script src="<?php echo base_url('assets/'); ?>lib/jquery/jquery.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/popper.js/popper.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/bootstrap/bootstrap.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/moment/moment.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/peity/jquery.peity.js"></script>

<script src="<?php echo base_url('assets/'); ?>lib/highlightjs/highlight.pack.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="<?php echo base_url('assets/'); ?>lib/select2/js/select2.min.js"></script>

<script src="<?php echo base_url('assets/'); ?>js/bracket.js"></script>

<script>
	$(function(){
		'use strict';

		$('#datatable1').DataTable({
			responsive: true,
			language: {
				searchPlaceholder: 'Search...',
				sSearch: '',
				lengthMenu: '_MENU_ items/page',
			}
		});

		$('#datatable2').DataTable({
			bLengthChange: false,
			searching: false,
			responsive: true
		});

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>








