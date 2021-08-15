

<!-- Content Wrapper -->
<!-- Custom fonts for this template-->
<link href="<?php echo base_url() ?>assets_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<title>Reservasi Email</title>

<!-- Custom styles for this template-->
<link href="<?php echo base_url() ?>assets_admin/css/sb-admin-2.min.css" rel="stylesheet">

<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Reservasi Email</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
       
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalSubscriptionForm">
                    <i class="fas fa-sm"></i>Approved
                </button>
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalSubscriptionForm">
                    <i class="fas fa-sm"></i>Rejected
                </button>
                <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Outlet</th>	
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
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
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Outlet</th>	
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                        </tr>
                    </tfoot>
                    </table>
                    <br>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <td>15</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Jumlah</td>
                            <td>130.000</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                    </table>
                    <p style="font-weight: bolder;">Makanan disajikan ketika pelanggan sampai</p>
                    <br>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Poin yang didapat</th>
                            <th>Poin yang berkurang</th>
                            <th>Total poin sekarang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>130</td>
                            <td>15</td>
                            <td>215</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Poin yang didapat</th>
                            <th>Poin yang berkurang</th>
                            <th>Total poin sekarang</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
            <div class="card-body">
            <p>Bukti Pembayaran</p>
            <img src="<?php echo base_url() ?>/assets/images/Kwitansi.jpg" alt="gambar struk" style="width:400px;height:200px;">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets_admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets_admin/js/sb-admin-2.min.js"></script>