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

<!-- Menu Section Two -->
    <section class="menu-section-two">
		<div class="auto-container">
			<div class="form-column col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="sec-title">
						<h4 class="title">Isi Form Reservasi</h4>
					</div>
			<form method="POST" action="halaman-pembayaran" id="form-menu">
			<div class="row clearfix">
			
					<?php foreach ($menu as $mn) { ?>

						<div class="menu-block-three col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="menu-title"><?php echo $mn->kategori_menu; ?></div>
									<!-- Menu Item -->
									<div class="menu-item">
										<h6><a href="#"><?php echo $mn->nama_menu; ?></a></h6>
										<div class="sub-title"><?php echo $mn->deskripsi_menu; ?></div>
										<div class="price-box">
											<div class="price"> Harga Rp.<?php echo $mn->harga_menu; ?></div>
										</div>
									</div>
									<!-- Menu Item -->
									<?php if($mn->point_menu){?>
										<div class="menu-item">
											<h6><a href="#">Atau</a></h6>
											<input type="checkbox" name="poin" placeholder="Poin" required> Tukar Poin?
											<div class="price-box">
												<div class="price"><?php echo $mn->point_menu; ?> Poin/Item</div>
											</div>
										</div>
									<?php } ?> 
									
								</div>
								<div class="image">
									<a href="#"><img src="<?php echo $mn->image_menu; ?>" alt="" /></a>
								</div>
								</div>
						</div>
							<?php } ?>
							<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="checkbox" name="Makanan" placeholder="Makanan disajikan" required> Makanan disajikan pada saat jam kedatangan
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="submit" class="theme-btn btn-style-four clearfix"><span class="icon flaticon-arrow-pointing-to-right"></span>Submit</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Menu Section Two -->