<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login Akun</title>
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
					<form action="<?=site_url('auth')?>" method="post">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<a href="<?= base_url()?>"><i class="fas fa-home">Beranda</i></a>
									<div class="card-title">Login</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Email Anda</label>
												<input type="email" class="form-control" id="email2" placeholder="Enter Email" name="member_email" required="">
												<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="password" placeholder="Password" name="member_password" required="">
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success" name="submit">Submit</button>
									<a href="<?= base_url('auth/daftar')?>">Belum Punya Akun? Daftar Sekarang</a>
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