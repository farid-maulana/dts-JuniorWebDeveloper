<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pembayaran</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="?menu=kamar">Pembayaran</a></li>
                            <li class="breadcrumb-item"><a href="#!">Tambah Pembayaran</a></li>
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
                        <form action="../process/process.php?aksi=pembayaran_penyewa" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="bulan">Bulan</label>
                                    <select class="custom-select" name="bulan" id="bulan">
                                        <option value="Januari <?php echo date('Y') ?>">Januari <?php echo date('Y') ?></option>
                                        <option value="Februari <?php echo date('Y') ?>">Februari <?php echo date('Y') ?></option>
                                        <option value="Maret <?php echo date('Y') ?>">Maret <?php echo date('Y') ?></option>
                                        <option value="April <?php echo date('Y') ?>">April <?php echo date('Y') ?></option>
                                        <option value="Mei <?php echo date('Y') ?>">Mei <?php echo date('Y') ?></option>
                                        <option value="Juni <?php echo date('Y') ?>">Juni <?php echo date('Y') ?></option>
                                        <option value="Juli <?php echo date('Y') ?>">Juli <?php echo date('Y') ?></option>
                                        <option value="Agustus <?php echo date('Y') ?>">Agustus <?php echo date('Y') ?></option>
                                        <option value="September <?php echo date('Y') ?>">September <?php echo date('Y') ?></option>
                                        <option value="Oktober <?php echo date('Y') ?>">Oktober <?php echo date('Y') ?></option>
                                        <option value="November <?php echo date('Y') ?>">November <?php echo date('Y') ?></option>
                                        <option value="Desember <?php echo date('Y') ?>">Desember <?php echo date('Y') ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nominal">Nominal</label>
                                    <input type="number" class="form-control" name="nominal" id="nominal" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img">Gambar Kamar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img" name="img">
                                        <label class="custom-file-label" for="img">Choose file</label>
                                    </div>
                                </div>
                                <input type="hidden" name="tanggal" value="<?php echo date('d-m-Y h:i:s'); ?>">
                            </div>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>