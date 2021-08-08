<!-- Page Title -->
<section class="page-title" style="background-image: url(<?php echo base_url(); ?>/assets/images/background/6.jpg)">
		<div class="pattern-layer" style="background-image: url(<?php echo base_url(); ?>/assets/images/main-slider/pattern-7.png)"></div>
    	<div class="auto-container">
			<h2>Our Menu</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Menu</li>
			</ul>
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
						<div class="text">Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam.</div>
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
						<div class="text">Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam.</div>
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
						<div class="text">Us percipit urbanitas referrentur ea. Mei at numquam molestiae intellegam.</div>
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
							<a href="#"><img src="<?php echo $mn->image_menu; ?>" alt="" /></a>
						</div>
					</div>
				</div>

			<?php } ?>

			
				
				<!-- Menu Block Three -->
				<!-- <div class="menu-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="menu-title">Main Course</div> -->
							<!-- Menu Item -->
							<!-- <div class="menu-item">
								<h6><a href="#">Beef Super Grill</a></h6>
								<div class="sub-title">Daging sapi tenderloin panggang yang lembut dan diproses dengan bumbu istimewa.</div>
								<div class="price-box">
									<div class="price"> Harga Rp.75.000</div>
										<input type="number" name="harga" placeholder="kuantitas" required>
								</div>
							</div> -->
							<!-- Menu Item -->
							<!-- <div class="menu-item">
								<h6><a href="#">Atau</a></h6>
								<input type="checkbox" name="poin" placeholder="Poin" required> Tukar Poin?
								<div class="price-box">
									<div class="price">75 Poin/Item</div>
								</div>
							</div>
						</div>
						<div class="image">
							<a href="#"><img src="../foodily/images/daging-menu.jpg" alt="" /></a>
						</div>
					</div>
				</div> -->
				
				<!-- Menu Block Three -->
				<!-- <div class="menu-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="menu-title">Side dish</div> -->
							<!-- Menu Item -->
							<!-- <div class="menu-item">
								<h6><a href="#">Mangsi Super Pizza</a></h6>
								<div class="sub-title">Pizza dengan topping sosis dan keju mozarella</div>
								<div class="price-box">
									<div class="price">Harga Rp.50.000</div>
									<input type="number" name="harga" placeholder="kuantitas" required>
								</div>
							</div>
						</div>
						<div class="image">
							<a href="#"><img src="<?php echo base_url() ?>/assets/images/Pizza.png" alt="" /></a>
						</div>
					</div>
				</div> -->
				
				<!-- Menu Block Three -->
				<!-- <div class="menu-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="menu-title">Coffee</div> -->
							<!-- Menu Item -->
							<!-- <div class="menu-item">
								<h6><a href="#">Coffee Mangsi Latte</a></h6>
								<div class="price-box">
									<div class="price">Harga Rp.15.000</div>
									<input type="number" name="harga" placeholder="kuantitas" required>
								</div>
							</div> -->
							<!-- Menu Item -->
							<!-- <div class="menu-item">
								<h6><a href="#">Atau</a></h6>
								<input type="checkbox" name="poin" placeholder="Poin" required> Tukar Poin?
								<div class="price-box">
									<div class="price">15 Poin/Item</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="image">
							<a href="#"><img src="../foodily/images/Mangsi Logo Coffee Powder.jpg" alt="" /></a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>