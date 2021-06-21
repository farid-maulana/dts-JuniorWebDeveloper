<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pelanggan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li> -->
                            <li class="breadcrumb-item"><a href="#!">Data Pelanggan</a></li>
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
                        <form action="../proses.php?aksi=add_pelanggan" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="no_pelanggan">No. Pelanggan</label>
                                    <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" placeholder="Masukkan dalam bentuk angka">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nama_pelanggan">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
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
                                        <th>No. Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Alamat Pelanggan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = mysqli_query($connect, "SELECT * FROM pelanggan");
                                    foreach ($data as $key => $item) {
                                    ?>
                                        <tr>
                                            <td><?php echo ++$key; ?></td>
                                            <td><?php echo $item['Nopelanggan']; ?></td>
                                            <td><?php echo $item['Namapelanggan']; ?></td>
                                            <td><?php echo $item['Alamat']; ?></td>
                                            <td>
                                                <a href="../proses.php?aksi=delete_pelanggan&id=<?php echo $item['Nopelanggan']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#editPelanggan<?php echo $item['Nopelanggan']; ?>"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <div id="editPelanggan<?php echo $item['Nopelanggan']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="../proses.php?aksi=update_pelanggan&id=<?php echo $item['Nopelanggan']; ?>" method="POST">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="nama_pelanggan" class="col-sm-3 col-form-label">Nama Pelanggan</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $item['Namapelanggan']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $item['Alamat']; ?>">
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