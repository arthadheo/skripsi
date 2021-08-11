<!-- Page Title -->
<section class="page-title" style="background-image: url(../foodily/images/untuk-background.jpg)">
	<!-- <div class="pattern-layer" style="background-image: url(images/background/pattern-7.png)"></div> -->
	<div class="auto-container">
		<div class="sec-title centered">
			<h2>Reservasi <span class="theme_color"></span></h2>
			<div class="separate"></div>
			
		</div>
		<div class="row clearfix">
		
		<!-- <h2>Reservasi</h2> -->
	</div>
</section>
<!-- End Page Title -->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			
				<!-- Form Column -->
				<div class="form-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
					<div class="sec-title">
						<h4 class="title">Isi Form Reservasi</h4>
					</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="post" action="<?php echo base_url(); ?>ReservasiMenu" id="form-data">
								<div class="row clearfix">
								
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="username" placeholder="Nama Lengkap" required value="<?php echo $_SESSION['nama_pelanggan']; ?>">
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="place" placeholder="Indoor/Outdoor" required>
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="Telpon" placeholder="No Telpon" required value="<?php echo $_SESSION['nomor_telepon_pelanggan']; ?>">
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="date" name="tanggal" placeholder="Tanggal Kedatangan" required> Tanggal Kedatangan
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" placeholder="Email" required value="<?php echo $_SESSION['email_pelanggan']; ?>">
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="time" name="Jam" placeholder="Jam Kedatangan" required> Jam Kedatangan
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<select type="text" name="outlet" onchange="tampilkan()" placeholder="Makanan disajikan" required> Pilih Outlet
										<?php foreach ($store as $str) { ?>
										<option value="Mangsi Merdeka"><?php echo $str->nama_store; ?></option>
										<?php } ?>
									</div>
								</div>
								<br>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="submit" class="theme-btn btn-style-four clearfix"><span class="icon flaticon-arrow-pointing-to-right"></span>Lanjut</button>
								</div>
							</form>
							<!-- Contact Form -->
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->