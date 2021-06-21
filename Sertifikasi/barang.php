<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Barang</h5>
                        </div>
                        <ul class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li> -->
                            <li class="breadcrumb-item"><a href="#!">Data Barang</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-border-style">
                        <form action="../proses.php?aksi=add_barang" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="kode_barang">Kode Barang</label>
                                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan dalam bentuk angka">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="harga_barang">Harga Barang</label>
                                    <input type="number" class="form-control" id="harga_barang" name="harga_barang">
                                </div>
                            </div>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        </div>
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = mysqli_query($connect, "SELECT * FROM barang");
                                    foreach ($data as $key => $item) {
                                    ?>
                                        <tr>
                                            <td><?php echo ++$key; ?></td>
                                            <td><?php echo $item['Kodebarang']; ?></td>
                                            <td><?php echo $item['Namabarang']; ?></td>
                                            <td><?php echo $item['Hargabarang']; ?></td>
                                            <td>
                                                <a href="../proses.php?aksi=delete_barang&id=<?php echo $item['Kodebarang']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#editBarang<?php echo $item['Kodebarang']; ?>"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <div id="editBarang<?php echo $item['Kodebarang']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="../proses.php?aksi=update_barang&id=<?php echo $item['Kodebarang']; ?>" method="POST">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $item['Namabarang']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="harga_barang" class="col-sm-3 col-form-label">Harga Barang</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $item['Hargabarang']; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn  btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>