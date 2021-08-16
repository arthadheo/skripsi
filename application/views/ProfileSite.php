<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">

        <title><?php echo $title; ?></title>

        <link rel="shortcut icon" href="../foodily/images/Logi Api Mangsi 1.png" type="image/x-icon">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       
        <link href="<?php echo base_url() ?>assets/css/profile.css" rel="stylesheet">
        
    </head>
    
    <body>
    <section class="page-title" style="background-image: url(../foodily/images/untuk-background.jpg)">
		<!-- <div class="pattern-layer" style="background-image: url(images/background/pattern-7.png)"></div> -->
    	<div class="auto-container">
			<div class="sec-title centered">
				<h2>Profile Pelanggan<span class="theme_color"></span></h2>
				<div class="separate"></div>
				
			</div>
			<div class="row clearfix">
			
			<!-- <h2>Reservasi</h2> -->
        </div>
    </section>
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['nama_pelanggan']; ?>
                                    </h5>
                        </div>
                    </div>
                    <div class="products"><a href="<?php echo base_url(); ?>auth/logout">Logout</a></div>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['nama_pelanggan']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email_pelanggan']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['nomor_telepon_pelanggan']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['alamat_pelanggan']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Poin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['point_pelanggan']; ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </body>
</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>