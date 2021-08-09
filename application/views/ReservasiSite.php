<!-- Sticky Header  -->
<div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Search Btn -->
						<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
						
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
						
					</div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="contact.html" class="theme-btn btn-style-one clearfix"><span class="icon"></span>Consultation</a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>foodily@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	
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
							<form method="post" action="sendemail.php" id="contact-form">
								<div class="row clearfix">
								
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="username" placeholder="Nama Lengkap" required><?php echo $_SESSION['nama_pelanggan']; ?>
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="place" placeholder="Indoor/Outdoor" required>
									</div>

									<!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Your Comment"></textarea>
									</div> -->

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="Telpon" placeholder="No Telpon" required><?php echo $_SESSION['nomor_telepon_pelanggan']; ?>
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="date" name="tanggal" placeholder="Tanggal Kedatangan" required> Tanggal Kedatangan
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" placeholder="Email" required><?php echo $_SESSION['email_pelanggan']; ?>
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="time" name="Jam" placeholder="Jam Kedatangan" required> Jam Kedatangan
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<select type="text " name="outlet" onchange="tampilkan()" placeholder="Makanan disajikan" required> Pilih Outlet
										<?php foreach ($store as $str) { ?>
										<option value="Mangsi Merdeka"><?php echo $str->nama_store; ?></option>
										<?php } ?>
									</div>
									

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="checkbox" name="Makanan" placeholder="Makanan disajikan" required> Makanan disajikan pada saat jam kedatangan
									</div>
								</div>
								<br>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="submit" class="theme-btn btn-style-four clearfix"><span class="icon flaticon-arrow-pointing-to-right" href="<?php echo base_url(); ?>/ReservasiSite"></span>Lanjut</button>
								</div>
							</form>
							<!-- Contact Form -->
						</div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<!-- <div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<ul class="info-list">
							<li>
								<strong>Berlin</strong>
								52 Corso Magenta <br>20123 Milano, Italy <br> +123 -45678-900 <br>yourspa@info.com
							</li>
							<li>
								<strong>Opening Hours</strong>
								Monday – Friday 09:00 – 23:00 <br> Saturday 09:00 – 22:00
							</li>
						</ul>
					</div>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->