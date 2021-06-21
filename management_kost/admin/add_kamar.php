<?php 	
$tipe_kamar = $kamar->tipeKamar();
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
                            <li class="breadcrumb-item"><a href="?menu=kamar">Data Kamar</a></li>
                            <li class="breadcrumb-item"><a href="#!">Tambah Kamar</a></li>
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
                        <form action="../process/process.php?aksi=tambah_kamar" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Nama Kamar</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tipe">Tipe Kamar</label>
                                    <select class="custom-select" name="tipe" id="tipe">
                                        <?php
                                        $query = "SELECT * FROM room_type";
                                        $result = mysqli_query($connect, $query);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                        // foreach($tipe_kamar as $row) {
                                        ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['type_name']; ?></option>
                                        <?php
                                            }
                                        }
                                        // }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img">Gambar Kamar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img" name="img">
                                        <label class="custom-file-label" for="img">Choose file</label>
                                    </div>
                                </div>
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