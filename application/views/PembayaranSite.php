<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link href="<?php echo base_url() ?>assets_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<title>Reservasi Email</title>

<!-- Custom styles for this template-->
<link href="<?php echo base_url() ?>assets_admin/css/sb-admin-2.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<section class="contact-page-section">
    <div class="auto-container">
        <h1>Pembayaran</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Outlet</th>	
                    <th>Tempat</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Jumlah Orang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dewo</td>
                    <td>085745123656</td>
                    <td>2121@gmail.com</td>
                    <td>Mangsi Merdeka | Mix Your Own Grill</td>	
                    <td>Indoor</td>
                    <td>03/08/2021</td>
                    <td>19.20</td>
                    <td>5 dewasa, 2 anak</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Makanan</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Total harga</th>	
                    <th>Poin digunakan</th>	
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Burger Ayam</td>
                    <td>25.000</td>
                    <td>2</td>
                    <td>50.000</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pizza Hid</td>
                    <td>50.000</td>
                    <td>1</td>
                    <td>50.000</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Coffee Latte</td>
                    <td>15.000</td>
                    <td>2</td>
                    <td>30.000</td>
                    <td>15.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Jumlah Harga</td>
                    <td>130.000</td>
                    <td>15.000</td>
                </tr>
            </tbody>
        </table>
        <p style="font-weight: bolder;">Makanan disajikan ketika pelanggan sampai</p>
        <br>
    </div>
</section>
<section class="contact-page-section">
    <div class="auto-container">
        <?php echo form_open_multipart('Pembayaran/do_upload');?>
        
            <div class="form-group">
                <label>Upload bukti pembayaran</label>
                <input type="file" name="bukti_pembayaran" class="form-control" size="20" required>
                <input type="submit" value="upload" />
            </div>

        
        <?php echo form_close(); ?>
</section>
</body>
</html>
