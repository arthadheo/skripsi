<!-- Menu Section Two -->
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
							<div class="menu-item">
								<h6><a href="#">Atau</a></h6>
								<input type="checkbox" name="poin" placeholder="Poin" required> Tukar Poin?
								<div class="price-box">
									<div class="price"><?php echo $mn->point_menu; ?> Poin/Item</div>
								</div>
							</div>
						</div>
						<div class="image">
							<a href="#"><img src="<?php echo $mn->image_menu; ?>" alt="" /></a>
						</div>
					</div>
				</div>

			<?php } ?>
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<button type="submit" class="theme-btn btn-style-four clearfix"><span class="icon flaticon-arrow-pointing-to-right"></span>Send</button>
				</div>
			</div>
		</div>
	</section>
	<!-- End Menu Section Two -->