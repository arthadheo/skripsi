
     
     <!-- Banner Section -->
     <section class="banner-section">
         <div class="pattern-layer" style="background-image: url(<?php echo base_url() ?>/assets/images/main-slider/pattern-1.png)"></div>
         <div class="main-slider-carousel owl-carousel owl-theme">
             
             <!-- Slide -->
             <?php foreach ($promo as $pr) { ?>
             <div class="slide">
                 <div class="auto-container">
                     <div class="row clearfix">
                     
                         <!-- Content Column -->
                         <div class="content-column col-lg-6 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <h1><span class="first-letter" name="Judul"><?php echo $pr->judul; ?></span></h1>
                                 <div class="text" name="deskripsi"><?php echo $pr->deskripsi; ?></div>
                                 <div class="btns-box">
                                 </div>
                                 <div class="icons-box" >
                                     <img src="<?php echo base_url() ?>/assets/images/main-slider/icons.png" alt="" />
                                 </div>
                             </div>
                         </div>
                         
                         <!-- Image Column -->
                         <div class="image-column col-lg-6 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <div name="gambar_promosi" class="icon-layer-three" style="background-image: url(<?php echo base_url() ?>/assets/images/main-slider/icon-3.png)"></div>
                                 <div class="image">
                                     <img src="<?php echo $pr->gambar_promosi; ?>" alt="" />
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div>
             </div>
             <?php } ?>
            
             <!-- <div class="slide"> -->
                 <!-- <div class="icon-layer-two" style="background-image: url(images/main-slider/icon-6.png)"></div> -->
                 <!-- <div class="auto-container">
                     <div class="row clearfix"> -->
                     
                         <!-- Content Column -->
                         <!-- <div class="content-column col-lg-6 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <h1><span class="first-letter">Makan</span><span class="second-letter">Sepuasnya</span></h1>
                                 <div class="text">Makan Sepuasnya Rp.90.000 | Hanya di Mangsi Trans Studio Mall Bali 12 - 31 Desember 2019.</div>
                                 <div class="btns-box">
                                 </div>
                                 <div class="icons-box">
                                     <img src="<?php echo base_url() ?>/assets/images/main-slider/icons.png" alt="" />
                                 </div>
                             </div>
                         </div> -->
                         
                         <!-- Image Column -->
                         <!-- <div class="image-column col-lg-6 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <div class="icon-layer-three" style="background-image: url(<?php echo base_url() ?>/assets/images/main-slider/icon-3.png)"></div>
                                 <div class="image">
                                     <img src="<?php echo base_url() ?>/assets/images/Cetak Luster.jpg" alt="" />
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div>
             </div> -->
             
             <!-- Slide -->
             <!-- <div class="slide style-two"> -->
                 <!-- <div class="icon-layer-one" style="background-image: url(images/main-slider/icon-1.png)"></div>
                 <div class="icon-layer-two" style="background-image: url(images/main-slider/icon-7.png)"></div> -->
                 <!-- <div class="auto-container">
                     <div class="row clearfix"> -->
                     
                         <!-- Content Column -->
                         <!-- <div class="content-column col-lg-6 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <h1><span class="first-letter"> </span><span class="second-letter">Makan di Mangsi</span></h1>
                                 <div class="text">Bawa struk belanja produk H&M TSM. Dapatkan diskon spesial di Mangsi.</div>
                                 <div class="btns-box">
                                 </div>
                                 <div class="icons-box">
                                     <img src="<?php echo base_url() ?>/assets/images/main-slider/icons.png" alt="" />
                                 </div>
                             </div>
                         </div> -->
                         
                         <!-- Image Column -->
                         <!-- <div class="image-column col-lg-6 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <div class="icon-layer-three" style="background-image: url(<?php echo base_url() ?>/assets/images/main-slider/icon-3.png)"></div>
                                 <div class="image">
                                     <img src="<?php echo base_url() ?>/assets/images/Promo H&M Mangsi IG Feed.jpg" alt="" />
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div> -->
             <!-- </div> -->
             
         </div>
         
     </section>
     <!-- End Banner Section -->
     
     <!-- Juice Section -->
     <section class="juice-section">
         <div class="section-text">yummy</div>
         <div class="pattern-layer" style="background-image: url(<?php echo base_url() ?>/assets/images/background/1.png)"></div>
         <div class="pattern-layer-two" style="background-image: url(<?php echo base_url() ?>/assets/images/icons/menu-icon-1.png)"></div>
         <div class="auto-container">
             <div class="row clearfix">
             
                 <!-- Image Column -->
                 <div class="image-column col-lg-7 col-md-12 col-sm-12">
                     <div class="inner-column">
                         <div class="image">
                             <img src="<?php echo base_url() ?>/assets/images/Beef-super-grill.jpg" alt="" />
                         </div>
                     </div>
                 </div>
                 
                 <!-- Content Column -->
                 <div class="content-column col-lg-5 col-md-12 col-sm-12">
                     <div class="inner-column">
                         <!-- Sec Title -->
                         <div class="sec-title">
                             <div class="title">Best Seller Menu</div>
                             <h2>Beef Super Grill</span></h2>
                             <div class="separate"></div>
                             <div class="text">Daging sapi tenderloin panggang yang lembut dan diproses dengan bumbu istimewa.</div>
                         </div>
                         <a href="<?php echo base_url(); ?>Login" class="theme-btn btn-style-two clearfix"><span class="icon"></span>Login disini untuk pesan</a>
                     </div>
                 </div>
                 
             </div>
         </div>
     </section>
     <!-- End Juice Section -->
     
     <!-- Beverage Section -->
     <section class="beverage-section">
         <!-- <div class="icon-layer" style="background-image: url(images/resource/beverage.png)"></div> -->
         <div class="auto-container">
             <!-- Sec Title -->
             <div class="sec-title centered">
                 <div class="title">Best for You</div>
                 <h2>Our Beverage</h2>
                 <div class="separate"></div>
             </div>
             <div class="row clearfix">
             
                 <!-- Beverage Column -->
                 <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image">
                             <a href="milkshake.html"><img src="<?php echo base_url() ?>/assets/images/daging-1.jpg" alt="" /></a>
                         </div>
                         <div class="lower-content">
                             <h6><a href="milkshake.html">Main Course</a></h6>
                         </div>
                     </div>
                 </div>
                 
                 <!-- Beverage Column -->
                 <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image">
                             <a href="milkshake.html"><img src="<?php echo base_url() ?>/assets/images/sosis-1.jpg" alt="" /></a>
                         </div>
                         <div class="lower-content">
                             <h6><a href="milkshake.html">Side dish</a></h6>
                         </div>
                     </div>
                 </div>
                 
                 <!-- Beverage Column -->
                 <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image">
                             <a href="milkshake.html"><img src="<?php echo base_url() ?>/assets/images/juice.jpg" alt="" /></a>
                         </div>
                         <div class="lower-content">
                             <h6><a href="milkshake.html">Juice</a></h6>
                         </div>
                     </div>
                 </div>
                 
                 <!-- Beverage Column -->
                 <div class="beverage-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image">
                             <a href="milkshake.html"><img src="<?php echo base_url() ?>/assets/images/coffee-1.jpg" alt="" /></a>
                         </div>
                         <div class="lower-content">
                             <h6><a href="milkshake.html">Coffee & Tea</a></h6>
                         </div>
                     </div>
                 </div>
                 
             </div>
             
             <!-- Button Box -->
             <div class="button-box text-center">
                 <a href="menu.html" class="theme-btn btn-style-two clearfix"><span class="icon"></span>View All Products</a>
             </div>
             
         </div>
     </section>
     
     <!-- News Section -->
     <section class="news-section">
         <!-- <div class="pattern-layer" style="background-image: url('<?php echo base_url() ?>/assets/images/background/pattern-5.png')"> -->
         <div class="auto-container">
             <!-- Sec Title -->
             <div class="sec-title centered">
                 <div class="title">Find Us</div>
                 <h2>Outlet Restaurant</h2>
                 <div class="separate"></div>
             </div>
             <div class="row clearfix">
             <?php foreach ($store as $str) { ?>
                    <!-- News Block -->
                 <div class="news-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                         <div class="lower-content">
                         <div class="category">Denpasar</div>
                             <h6><a href="#"><?php echo $str->nama_store; ?></a></h6>
                             <ul class="post-info">
                                 <li>Alamat : <?php echo $str->lokasi_store; ?></li>
                                 <li>No.Telp : <?php echo $str->nomor_telepon_restoran; ?></li>
                             </ul>
                             <br>
                             <div class="products"><?php echo $str->kuota; ?> kuota</div>
                         </div>
                     </div>
                 </div>
                  
             <?php } ?>
                 
             </div>
         </div>
     </section>
     <!-- End News Section -->
     
    
     
     