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
													<th>Aksi</th>
												</tr>
											</thead>
											
											<tbody>
												<?php foreach ($riwayat_reservasi as $rr) {
												?>
												<tr>
													<td><?=$rr->reservasi_kd?></td>
													<td><?=$rr->reservasi_booking?></td>
													<td><?=$rr->kamar_nomor?></td>
													<td><?=$rr->reservasi_waktu?></td>
													<td><?=$rr->reservasi_cek_in?></td>
													<td><?=$rr->reservasi_cek_out?></td>
													<td>Rp. <?= number_format($rr->reservasi_total_bayar) ?></td>
													
													<td>
														<?php
															if ($rr->reservasi_status) {
																echo "Sudah Terbayar";
															}else{
																?>
																<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="setIdBayar('<?=$rr->reservasi_kd?>','<?=$rr->kamar_nomor?>' )">
																	<i class="fas fa-money-check-alt"></i> &nbsp
																	Bayar
																</button>
																<a href="<?=base_url('dashboard/hapus_riwayat_reservasi/')?><?=$rr->reservasi_kd?>"><button class="btn btn-danger btn-round ml-auto"  onclick="return confirm('Yakin Hapus?')">Batal</button></a>
																<?php

															}
														?>
														
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
			
		</div>
		<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Pembayaran Reservasi</span> 
														
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Mohon Diisi dengan Benar</p>
													<form method="post" action="<?= base_url('dashboard/konfirmasi')?>" enctype="multipart/form-data">
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Reservasi Kode</label>
																	<input id="reservasi_kd" name="reservasi_kd" type="text" class="form-control" placeholder="fill name" readonly="" required="">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Nomor Kamar</label>
																	<input id="kamar_nomor" name="kamar_nomor" type="text" class="form-control" placeholder="fill position" readonly="" required="">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Total Bayar</label>
																	<input id="konfirmasi_jml_pembayaran" name="konfirmasi_jml_pembayaran" type="number" class="form-control" placeholder="fill office" required="">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Bank</label>
																	<input id="konfirmasi_bank" name="konfirmasi_bank" type="text" class="form-control" placeholder="fill office" required="">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Unggah Foto Bukti Transfer</label>
																	<input id="konfirmasi_foto_bukti" name="konfirmasi_foto_bukti" type="file" class="form-control" placeholder="fill office" required="">
																</div>
															</div>
														</div>
														<div class="modal-footer no-bd">
															<button name="submit" class="btn btn-primary">Bayar</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
														</div>
														
													</form>
												</div>
												
											</div>
										</div>
									</div>
									<script type="text/javascript">
										function setIdBayar(reservasi_kd, kamar_nomor) {
											$('#reservasi_kd').val(reservasi_kd);
											$('#kamar_nomor').val(kamar_nomor);
										}
									</script>