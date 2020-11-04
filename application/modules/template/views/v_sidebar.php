<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?=base_url()?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
									<li>
										<a href="<?=base_url('auth/logout')?>">
											<span class="link-collapse">Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?=site_url('dashboard')?>" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							
						</li>
						<?php if ($this->session->userdata('member_status') == '2') {
						?>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#frontoffice" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Front Office</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="frontoffice">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?=base_url()?>/front_office/reservasi">
											<span class="sub-item">Reservasi</span>
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>/front_office/konfirmasi ">
											<span class="sub-item">Konfirmasi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Kamar</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?=base_url()?>/demo1/index.html">
											<span class="sub-item">Kategori Kamar</span>
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>/demo2/index.html">
											<span class="sub-item">Kamar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<?php
						}if ($this->session->userdata('member_status')=='1') {
						?>
						<li class="nav-item active">
							<a  href="<?=base_url()?>" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Pesan Kamar</p>
							</a>
						</li>
						<li class="nav-item active">
							<a  href="<?=base_url('dashboard/riwayat_reservasi')?>"aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Riwayat Reservasi</p>
							</a>
						</li>
						<li class="nav-item active">
							<a  href="<?=base_url('dashboard/reservasi_konfirmasi')?>"aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Reservasi Terkonfirmasi</p>
							</a>
						</li>
						<?php
						} ?>
						
					</ul>
				</div>
			</div>
		</div>