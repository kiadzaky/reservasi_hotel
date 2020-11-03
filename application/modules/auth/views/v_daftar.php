<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>DAFTAR Akun</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?=base_url()?>/assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="<?=base_url()?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?=base_url()?>/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/demo.css">
</head>
<body>
	<div class="wrapper sidebar_minimize">
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<form action="<?=base_url('auth/daftar')?>" method = "post">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<?= $this->session->userdata('message'); ?>
									<div class="card-title">Daftar</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">NIK Anda</label>
												<input type="text" name="member_nik" class="form-control" id="email2" placeholder="Masukan NIK Anda" required="">
											</div>
											<div class="form-group">
												<label for="email2">Nama Anda</label>
												<input type="text" name="member_nama" class="form-control" id="email2" placeholder="Masukan Nama Anda" required="">
											</div>
											<div class="form-group">
												<label for="email2">Tempat Tanggal Lahir Anda</label>
												<input type="text" name="member_tempat" class="form-control" name="tempat" placeholder="Tempat Lahir">
												<input type="date" name="member_tanggal" class="form-control" id="email2" placeholder="Masukan Tempat Tanggal Lahir Anda" required="">
											</div>
										</div>
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Jenis Kelamin Anda</label>
												<select class="form-control" name="member_jkel" required="">
													<option value="Mas">Laki - Laki</option>
													<option value="Mbak">Perempuan</option>
												</select>
											</div>
											<div class="form-group">
												<label for="email2">Alamat Anda</label>
												<textarea class="form-control" name="member_alamat" required=""></textarea>
											</div>

											<div class="form-group">
												<label for="email2">Agama Anda</label>
												<select class="form-control" name="member_agama" required="">
													<option value="islam">Islam</option>
													<option value="kristen">Kristen</option>
													<option value="katolik">Katolik</option>
													<option value="hindu">Hindu</option>
													<option value="budha">Budha</option>
													<option value="konghucu">Konghucu</option>
												</select>
											</div>
											<div class="form-group">
												<label for="email2">Status Perkawinan Anda</label>
												<select class="form-control" name="member_status_perkawinan" required="">
													<option>Belum Kawin</option>
													<option>Kawin</option>
													<option>Duda</option>
													<option>Janda</option>
												</select>
											</div>
											<div class="form-group">
												<label for="email2">Pekerjaan Anda</label>
												<input type="text" name="member_pekerjaan" class="form-control" id="email2" placeholder="Masukan Pekerjaan Anda" required="">
											</div>
											
										</div>
										<div class=" col-lg-4 col-md-6">
											<div class="form-group">
												<label for="email2">Email Anda</label>
												<input type="email" name="member_email" class="form-control" id="email2" placeholder="Masukan Email Anda" required="">
											</div>
											<div class="form-group">
												<label for="email2">No Telepon Anda</label>
												<input type="number" name="member_telepon" class="form-control" id="email2" placeholder="Masukan No Telepon Anda" required="">
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" name="member_password" class="form-control" id="password" placeholder="Password" required="">
											</div>
										</div>
									</div>									
								</div>
								<div class="card-action">
									<button class="btn btn-success" name="submit">DAFTAR</button>
									<a href="<?=base_url('auth')?>" class="btn btn-danger">LOGIN</a>									
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="<?=base_url()?>/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?=base_url()?>/assets/js/core/popper.min.js"></script>
	<script src="<?=base_url()?>/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?=base_url()?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="<?=base_url()?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="<?=base_url()?>/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?=base_url()?>/assets/js/setting-demo2.js"></script>
</body>
</html>