		<div class="br-pagebody">
			<div class="br-section-wrapper">
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Jenis Spesialis</h6>

				<div class="table-wrapper">
					<table id="datatable1" class="table display responsive nowrap">
						<thead>
							<tr>
								<th class="wd-15p">No</th>
								<th class="wd-15p">Jenis Spesialis</th>
								<th class="wd-20p">Edit</th>
								<th class="wd-15p">Hapus</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach ($data as $v):
								?>
								<tr>
									<td align="center"><?= ++$i ?></td>
									<td><?= $v->nama_spesialis?></td>
									<td><a href="<?php echo base_url("admin/edit_jenisspesialis/$v->id"); ?>"
										class="btn btn-info">Edit</a></td>
									<td><a href="<?php echo base_url("admin/edit_pengisiandata/$v->id"); ?>"
											class="btn btn-danger">Hapus</a></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div><!-- table-wrapper -->

					</div><!-- br-section-wrapper -->
				</div><!-- br-pagebody -->


