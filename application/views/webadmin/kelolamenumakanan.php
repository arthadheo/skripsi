<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Menu Makanan</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-sm"></i>Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Menu</th>
                                <th>Deskripsi Menu</th>
                                <th>Harga Menu</th>
                                <th>Kategori Menu</th>
                                <th>Point Menu</th>
                                <th>Gambar Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Menu</th>
                                <th>Deskripsi Menu</th>
                                <th>Harga Menu</th>
                                <th>Kategori Menu</th>
                                <th>Point Menu</th>
                                <th>Gambar Menu</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <?php foreach ($menu as $mn) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $mn->nama_menu; ?></td>
                                <td><?php echo $mn->deskripsi_menu; ?></td>
                                <td><?php echo $mn->harga_menu; ?></td>
                                <td><?php echo $mn->kategori_menu; ?></td>
                                <td><?php echo $mn->point_menu; ?></td>
                                <td><?php echo $mn->image_menu; ?></td>
                                <td><button class="btn btn-primary" type="button">
                                        <i class="fas fa-sm"></i>Edit
                                    </button>
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-sm"></i>Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->