<!DOCTYPE html>
<html lang="en">
<head>
<title>Rooms</title>
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

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url('assets1')?>/images/rooms.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>Our Rooms</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search Box -->

	

	<!-- Rooms -->
<hr>
	<div class="">

		<div class="container">
			<div class="row rooms_row">
				
				<!-- Room -->
				<?php foreach ($kamar as $k) {
				?>
					<div class="col-lg-4">
						<div class="rooms_item">
							<div class="rooms_image"><img src="<?=base_url('assets1')?>/images/<?=$k->kategori_kamar_gambar?>" alt="https://unsplash.com/@yuni_ladyday2"></div>
							<div class="rooms_title_container text-center">
								<div class="rooms_title"><h1><?= $k->kategori_tipe ?></h1></div>
								<div class="rooms_price">From Rp. <span><?php echo number_format($k->kategori_kamar_harga) ?></span> /night</div>
								<div class="rooms_price"><span>Sisa Kamar : <?= $jml_kamar['jml_kamar'] ?></span></div>
							</div>
							<div class="rooms_list">
								<?php 
											$spesifikasi = $k->kategori_kamar_spesifikasi;
											$spesifikasi = str_replace(";", "<br>", $spesifikasi);
											

								?>
								<ul>
									<li class="align-items-center align-center">
										<div><div style="text-align: center; font-size: 20px;"><?=$spesifikasi?></div></div>
									</li>
									
								</ul>

							</div>
							<div class="button rooms_button ml-auto mr-auto"><a href="<?=base_url('room/pesan')?>/<?=$k->kategori_id?>"><?php echo $retVal = (empty($this->session->userdata('member_nik'))) ? 'Login Dulu' : 'Book Now' ;; ?></a></div>
						</div>
					</div>
				<?php
				} ?>
				
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Map -->
				<div class="col-xl-6">
					<div class="contact_map_container">
						
						<!-- Contact Map -->
						<div class="contact_map">

							<!-- Google Map -->
							<div class="map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>

						</div>

						<!-- Contact Info Box -->
						<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
							<ul class="contact_info_list">
								<!-- <li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="<?=base_url('assets1')?>/images/placeholder.png" alt=""></div></div>
									<div class="contact_info_text">1481 Creekside Lane Avila Beach, CA 931</div>
								</li> -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="<?=base_url('assets1')?>/images/smartphone.png" alt=""></div></div>
									<div class="contact_info_text">08970605445</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="<?=base_url('assets1')?>/images/mail.png" alt=""></div></div>
									<div class="contact_info_text">jember.application@gmail.com</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
				
				<!-- Contact Form -->
				<!-- <div class="col-xl-6 contact_col">
					<div class="contact_form_container">
						<div class="section_title_container_2">
							<div class="section_title"><h1>Contact Info</h1></div>
							<div class="section_text">Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum.</div>
						</div>
						<form action="#" class="contact_form" id="contact_form">
							<div class="row contact_row">
								<div class="col-md-6"><input type="text" class="contact_input" placeholder="Name" required="required"></div>
								<div class="col-md-6"><input type="email" class="contact_input" placeholder="E-mail" required="required"></div>
							</div>
							<div><textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
							<button class="contact_button">send message</button>
						</form>
					</div>
				</div> -->
			</div>
		</div>

	</div>

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
</body>
</html>