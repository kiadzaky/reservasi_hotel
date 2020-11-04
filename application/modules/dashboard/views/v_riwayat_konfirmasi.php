<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Riwayat Reservasi</h4>
									<?php echo $this->session->set_userdata('message'); ?>

								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Reservasi Kode</th>
													<th>Tanggal Booking</th>
													<th>Nomor Kamar</th>
													<th>Kedatangan</th>
													<th>Tanggal Cek In</th>
													<th>Tanggal Cek Out</th>
													<th>Total Bayar</th>
													<th>Bukti Upload</th>
												</tr>
											</thead>
											
											<tbody>
												<?php foreach ($riwayat_konfirmasi as $rk) {
												?>
												<tr>
													<td><?=$rk->reservasi_kd?></td>
													<td><?=$rk->reservasi_booking?></td>
													<td><?=$rk->kamar_nomor?></td>
													<td><?=$rk->reservasi_waktu?></td>
													<td><?=$rk->reservasi_cek_in?></td>
													<td><?=$rk->reservasi_cek_out?></td>
													<td>Rp. <?= number_format($rk->reservasi_total_bayar) ?></td>
													<td>
														<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#pictureModal" onclick="setImg('<?=$rk->konfirmasi_foto_bukti?>')">Lihat</button>
													</td>

												</tr>
												<?php
												} ?>
												
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="pictureModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<img height="500" width="450" id="imgModal">
												</div>
												
											</div>
										</div>
			</div>
			
		</div>
		<script type="text/javascript">
			function setImg(image) {
				var path = '<?= base_url('assets/img/')?>';
				var image = path + image ;
				console.log(image);
				document.getElementById("imgModal").src = image;
			}
		</script>