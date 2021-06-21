<?php 	
$tipe_kamar = $kamar->tipeKamar();
$tampil_kamar = $kamar->tampilKamar();
?>
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Kamar</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Kamar</a></li>
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
                    <div class="card-header">
                        <a href="?menu=add_tipe_kamar" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Tambah Tipe Kamar</a>
                        <a href="?menu=add_kamar" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Tambah Kamar</a>
                    </div>
                    <div class="card-body table-border-style">
                        <!-- <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kamar</th>
                                        <th>Tipe Kamar</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($tampil_kamar as $key => $kmr) {
                                    ?>
                                        <tr>
                                            <td><?php echo ++$key; ?></td>
                                            <td><?php echo $kmr['room_name']; ?></td>
                                            <td><?php echo $kmr['type_name']; ?></td>
                                            <td><?php echo $kmr['harga']; ?></td>
                                            <td>
                                                <a href="#" title="Detail"><i class="fa fa-eye"></i></a>
                                                <a href="#" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" title="Delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div> -->
                        <div class="col-xl-12">
                            <?php
                            foreach($tipe_kamar as $tipe) {
                            ?>
                                <div class="row">
                                    <div class="col-md-9">
                                        <h5><?php echo $tipe['type_name']; ?></h5>
                                        <p>Fasilitas : <?php echo $tipe['fasilitas']; ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <h4 style="text-align: right;">Rp <?php echo number_format($tipe['harga'],0,',','.'); ?></h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <?php
                                    foreach($tampil_kamar as $kmr) {
                                        if($kmr['type_id'] == $tipe['id']) {
                                        ?>
                                            <div class="col-sm-3">
                                                <div class="card text-white <?php echo $kmr['status'] == 1 ? 'bg-danger' : 'bg-success' ?>">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <h5 class="text-white"><?php echo $kmr['room_name']; ?></h5>
                                                        <div>
                                                            <a href="#" title="Detail" data-toggle="modal" data-target="#detail<?php echo $kmr['id']; ?>"><i class="fa fa-eye text-white"></i></a>
                                                            <a href="#" title="Edit"><i class="fa fa-edit text-white"></i></a>
                                                            <a href="../process/process.php?aksi=hapus_kamar&id=<?php echo $kmr['id']; ?>" title="Hapus"><i class="fa fa-trash text-white"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php
                                                        if($kmr['no_ktp'] != null) {
                                                        ?>
                                                            <h6 class="card-title text-white">Data Penyewa</h6>
                                                            <p class="card-text">Nama : <?php echo $kmr['full_name']; ?></p>
                                                        <?php
                                                        } else {
                                                            echo "Kamar Kosong";
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="detail<?php echo $kmr['id']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel"><?php echo $kmr['room_name']; ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="../assets/images/kamar/<?php echo $kmr['room_img']; ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>