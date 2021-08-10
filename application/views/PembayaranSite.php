<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
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
                    <th>No</th>
                    <th>Makanan</th>
                    <th>Harga</th>				
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bakso</td>
                    <td>12.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mie Goreng</td>
                    <td>7.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nasi Goreng</td>
                    <td>15.000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Sate Padang</td>
                    <td>17.000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nasi Soto</td>
                    <td>20.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah</td>
                    <td>250.000</td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>
</section>
<section class="contact-page-section">
    <div class="auto-container">
    <form method="POST" action="<?php echo base_url('WelcomeSite') ?>">
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="userfile" class="form-control" size="20" required>
        <input type="submit" value="upload" />
    </div>
    </form>
</section>
</body>
</html>
