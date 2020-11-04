<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?=$title?></h4>
						
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"><?=$title?></h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add <?=$title?>
										</button>
									</div>
									<?php echo $this->session->userdata('message'); ?>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="addName" type="text" class="form-control" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Position</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Office</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="fill office">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
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
														<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#pictureModal" onclick="setImg('<?=$rr->konfirmasi_foto_bukti?>')">Lihat</button>
													</td>
													<td>
														<?php
															if ($rr->reservasi_status) {
																?>
																<a href="<?= base_url('front_office/konfirmasi_reservasi/')?><?=$rr->reservasi_kd?>"><button class="btn btn-success">Konfirmasi</button></a>
																<?php
															}else{
																echo "<p style='color: red;'>Belum Bayar</p>";
															}
														?>
													</td>
													<td>
														
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
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		<script type="text/javascript">
			function setImg(image) {
				var path = '<?= base_url('assets/img/')?>';
				var image = path + image ;
				console.log(image);
				document.getElementById("imgModal").src = image;
			}
		</script>