<!-- Page Title -->
<section class="page-title" style="background-image: url(<?php echo base_url(); ?>/assets/images/untuk-background.jpg">
		<div class="pattern-layer" style="background-image: url(<?php echo base_url(); ?>/assets/images/main-slider/pattern-7.png)"></div>
    	<div class="auto-container">
			<h2>Menu Mangsi</h2>
			<!-- <ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Menu</li>
			</ul> -->
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Menu Page Section -->
    <section class="menu-page-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Menu Block Two -->
				<div class="menu-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="side-icon">
							<img src="<?php echo base_url(); ?>/assets/images/icons/menu-icon-1.png" alt="" />
						</div>
						<div class="icon">
							<img src="<?php echo base_url(); ?>/assets/images/icons/menu-1.png" alt="" />
						</div>
						<h6><a href="#">Awesome taste</a></h6>
						<div class="text"></div>
					</div>
				</div>
				
				<!-- Menu Block Two -->
				<div class="menu-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="side-icon">
							<img src="<?php echo base_url(); ?>/assets/icons/menu-icon-2.png" alt="" />
						</div>
						<div class="icon">
							<img src="<?php echo base_url(); ?>/assets/images/icons/menu-2.png" alt="" />
						</div>
						<h6><a href="#">Organic fruits</a></h6>
						<div class="text"></div>
					</div>
				</div>
				
				<!-- Menu Block Two -->
				<div class="menu-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="side-icon">
							<img src="<?php echo base_url(); ?>/assets/images/icons/menu-icon-3.png" alt="" />
						</div>
						<div class="icon">
							<img src="<?php echo base_url(); ?>/assets/images/icons/menu-3.png" alt="" />
						</div>
						<h6><a href="#">Healthy Blends</a></h6>
						<div class="text"></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Restaurant Section -->
	
	<section class="menu-section-two">
		<div class="auto-container">
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
								<!-- <div class="menu-item">
									<h6><a href="#">Atau</a></h6>
									<input type="checkbox" name="poin" placeholder="Poin" required> Tukar Poin?
									<div class="price-box">
										<div class="price">75 Poin/Item</div>
									</div>
								</div> -->
							</div>
							<div class="image">
								<a href="#"><img src="<?php echo $mn->image_menu; ?>" alt="" width="400px" height="350px">
								</a>
							</div>
						</div>
					</div>

				<?php } ?>
			</div>
		</div>
	</section>