<!DOCTYPE html>
<html lang="en">
<head>
<title>Pemesanan Kamar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Major - 5* Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets1')?>/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?=base_url('assets1')?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets1')?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets1')?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets1')?>/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?=base_url('assets1')?>/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets1')?>/styles/rooms.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets1')?>/styles/rooms_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#">
								<div><?=$title?></div>
								<div>5 * Hotel</div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								
							</ul>
						</nav>
						<div class="header_extra d-flex flex-row align-items-center justify-content-start ml-auto">
							<a href="http://wa.me/628970605445"><div class="phone d-flex flex-row align-items-center justify-content-start"><i class="fa fa-phone" aria-hidden="true"></i><span>08970605445</span></div></a>
							<div class="book_button trans_200"><a href="<?=base_url('auth')?>"><?php echo $retVal = (empty($this->session->userdata('member_nik'))) ? 'LOGIN' : 'DASHBOARD' ; ?></a></div>
							
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(<?=base_url('assets1')?>/images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				
				<li><a href="<?=base_url('auth')?>"><?php echo $retVal = (empty($this->session->userdata('member_nik'))) ? 'LOGIN' : 'DASHBOARD' ; ?></a></li>
			</ul>
			
		</div>
	</div>

	<!-- Home -->

	<!-- Search Box -->

	

	<!-- Rooms -->
<hr>

<br>
<br>
<hr>
<hr>
<br>
<br>
	<div class="">

		<div class="container">
			<div class="row rooms_row">
				
				<!-- Room -->
				
					<div class="col-lg-8">
						<div class="rooms_item">
							<table class="table table-bordered table-dark">
								<thead class="thead-light">
									<th>No Kamar</th>
									<th>Kategori Kamar</th>
									<th>Harga Kamar</th>
									<th>Spesifikasi Kamar</th>
								</thead>
								<tbody>
									<?php foreach ($detail_kamar as $dk) {
									?>
									<tr>
										
										<td><?=$dk->kamar_nomor?></td>
										<td><?=$dk->kategori_tipe?></td>
										<td>Rp. <?= number_format($dk->kategori_kamar_harga)?></td>
										<td><?=$dk->kategori_kamar_spesifikasi?></td>
									</tr>
									<?php
									} ?>
								</tbody>
							</table>
						<form method="POST">
							<div class="form-group">
								<input type="hidden" name="kamar_nomor" value="<?=$dk->kamar_nomor?>">
								<label style="color: black">Jam Kedatangan</label>
								<div class="form-control"><input type="time" class="form-control" name="reservasi_waktu" required=""></div>
							</div>
							<div class="form-group">
								<label style="color: black">Cek In</label>
								<div class="form-control"><input type="date" class="form-control" name="reservasi_cek_in" id="reservasi_cek_in" required=""></div>
							</div>
							<div class="form-group">
								<label style="color: black">Berapa Hari</label>
								<div class="form-control"><input type="number" id="tambah" name="reservasi_lama_menginap" class="form-control" onkeyup="tambah_hari('<?=$dk->kategori_kamar_harga?>')" required="" ></div>
							</div>
							<div class="form-group">
								<label style="color: black">Cek Out</label>
								<div class="form-control"><input readonly="" type="date" class="form-control" name="reservasi_cek_out" id="reservasi_cek_out" required=""></div>
							</div>
							<div class="form-group">
								<label style="color: black">Total Harga</label>
								<div class="form-control"><input readonly="" type="number" class="form-control" name="reservasi_total_bayar" id="reservasi_total_bayar" required="" readonly="" value=""></div>
							</div>
							<button class="btn btn-success" name="submit">Booking Now</button>
						</form>		
						</div>
							
					</div>
				
				
			</div>
		</div>
	</div>

	<!-- Contact -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-md-row flex-column align-items-center align-items-start justify-content-start">
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?=base_url('assets1')?>/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url('assets1')?>/styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?=base_url('assets1')?>/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/greensock/TweenMax.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url('assets1')?>/plugins/easing/easing.js"></script>
<script src="<?=base_url('assets1')?>/plugins/progressbar/progressbar.min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?=base_url('assets1')?>/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?=base_url('assets1')?>/js/rooms.js"></script>
<script type="text/javascript">
	function tambah_hari(harga) {
		var cek_in = document.getElementById('reservasi_cek_in').value;
		console.log(cek_in);
		var date = new Date(cek_in);
		console.log(date);
		var newdate = new Date(date)
		console.log(newdate);
		var day = document.getElementById('tambah').value;
		console.log(day);
		var hasil = newdate.setDate(newdate.getDate() + parseInt(day));
		var dd = newdate.getDate();
	    var MM = newdate.getMonth()+1 ;
	    var y = newdate.getFullYear();
	    console.log(hasil);
	    console.log(dd);
	    console.log(MM);
	    console.log(y);
	    
	    if (dd >= 0 && dd <=9) {
	    	var someFormattedDate = y + '-' + MM + '-0' + dd;
	    }else{
	    	var someFormattedDate = y + '-' + MM + '-' + dd;
	    }
		console.log(someFormattedDate);
		document.getElementById('reservasi_cek_out').value=someFormattedDate;

		console.log(harga);
		$('#reservasi_total_bayar').val(harga*day);
	}

</script>

</body>
</html>