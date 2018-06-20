		<div class="br-pagebody">
			<div class="br-section-wrapper">
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Data Dokter Praktek</h6>

				<div class="table-wrapper">
					<table id="datatable1" class="table display responsive nowrap">
						<thead>
							<tr>
								<th class="wd-15p">No</th>
								<th class="wd-15p">Nama Dokter</th>
								<th class="wd-15p">Spesialis</th>
								<th class="wd-15p">Jam buka </th>
								<th class="wd-15p">Nomor telp </th>
								<th class="wd-15p">Lokasi Praktek </th>
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
									<td><?= $v->nama_dokter?></td>
									<td><?= $v->nama_spesialis?></td>
									<td><?= $v->jam_buka?></td>
									<td><?= $v->nomor_hp ?></td>
									<td><?= $v->nama_lokasi ?></td>
									<td><a href="<?php echo base_url("admin/edit_datadokter/$v->id_dokter"); ?>"
										class="btn btn-info">Edit</a></td>
										<td><a href="<?php echo base_url("admin/hapus_datadokter/$v->id_dokter"); ?>"
											class="btn btn-danger">Hapus</a></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div><!-- table-wrapper -->

					</div><!-- br-section-wrapper -->
				</div><!-- br-pagebody -->


