		<div class="br-pagebody">
			<div class="br-section-wrapper">
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Data Lokasi Rumah Sakit dan Tempat Praktik</h6>

				<div class="table-wrapper">
					<table id="datatable1" class="table display responsive nowrap">
						<thead>
							<tr>
								<th class="wd-15p">No</th>
								<th class="wd-15p">Nama Lokasi</th>
								<th class="wd-15p">Kategori Lokasi </th>
								<th class="wd-15p">Edit </th>
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
									<td><?= $v->nama_lokasi?></td>
									<td><?= $v->nama_kategori?></td>
									<td><a href="<?php echo base_url("admin/edit_kategorilokasi/$v->id_lokasi"); ?>"
										class="btn btn-info">Edit</a></td>
									<td><a href="<?php echo base_url("admin/hapus_kategorilokasi/$v->id_lokasi"); ?>"
											class="btn btn-danger">Hapus</a></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div><!-- table-wrapper -->

					</div><!-- br-section-wrapper -->
				</div><!-- br-pagebody -->


