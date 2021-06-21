<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Penjualan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li> -->
                            <li class="breadcrumb-item"><a href="#!">Data Penjualan</a></li>
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
                        <form action="../proses.php?aksi=add_penjualan" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="faktur">Faktur</label>
                                    <input type="text" class="form-control" id="faktur" name="faktur" placeholder="Masukkan dalam bentuk angka">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="no_pelanggan">No. Pelanggan</label>
                                    <select class="form-control" id="no_pelanggan" name="no_pelanggan">
                                        <?php
                                        $data = mysqli_query($connect, "SELECT Nopelanggan FROM pelanggan");
                                        foreach ($data as $item) {
                                        ?>
                                            <option value="<?php echo $item['Nopelanggan']; ?>"><?php echo $item['Nopelanggan']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tanggal_penjualan">Tanggal Penjualan</label>
                                    <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan">
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
                                        <th>Faktur</th>
                                        <th>No. Pelanggan</th>
                                        <th>Tanggal Penjualan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = mysqli_query($connect, "SELECT * FROM penjualan");
                                    foreach ($data as $key => $item) {
                                    ?>
                                        <tr>
                                            <td><?php echo ++$key; ?></td>
                                            <td><?php echo $item['Faktur']; ?></td>
                                            <td><?php echo $item['Nopelanggan']; ?></td>
                                            <td>
                                                <?php 
                                                $date = strtotime($item['Tanggalpenjualan']);
                                                echo date('d F Y', $date);
                                                ?>
                                            </td>
                                            <td>
                                                <a href="../proses.php?aksi=delete_penjualan&id=<?php echo $item['Faktur']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#editPenjualan<?php echo $item['Faktur']; ?>"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <div id="editPenjualan<?php echo $item['Faktur']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="../proses.php?aksi=update_penjualan&id=<?php echo $item['Faktur']; ?>" method="POST">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="no_pelanggan" class="col-sm-3 col-form-label">No. Pelanggan</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" id="no_pelanggan" name="no_pelanggan">
                                                                        <?php
                                                                        $pelanggan = mysqli_query($connect, "SELECT Nopelanggan FROM pelanggan");
                                                                        foreach ($pelanggan as $no_pelanggan) {
                                                                        ?>
                                                                            <option value="<?php echo $no_pelanggan['Nopelanggan'] ?>" <?php echo $no_pelanggan['Nopelanggan'] == $item['Nopelanggan'] ? 'selected' : ''; ?>>
                                                                                <?php echo $no_pelanggan['Nopelanggan']; ?>
                                                                            </option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tanggal_penjualan" class="col-sm-3 col-form-label">Tanggal Penjualan</label>
                                                                <div class="col-sm-9">
                                                                    <?php
                                                                    $time = strtotime($item['Tanggalpenjualan']);
                                                                    $newformat = date('d/m/y',$time);
                                                                    ?>
                                                                    <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="<?php echo $newformat; ?>">
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