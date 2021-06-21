<?php 	
$kamar_kosong = $kamar->tampilKamarKosong();
?>
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Penyewa</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="?menu=penyewa">Data Penyewa</a></li>
                            <li class="breadcrumb-item"><a href="?menu=add_penyewa">Tambah Penyewa Baru</a></li>
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
                        <form action="../process/process.php?aksi=tambah_penyewa" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="no_ktp">Nomor KTP</label>
                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="3501237348xxx">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="full_name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jalanin Aja Dulu No. 21">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Malang">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tangal_lahir" name="tanggal_lahir">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <!-- <br><br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="L" class="custom-control-input">
                                        <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="perempuan" name="jenis_kelamin" value="P" class="custom-control-input">
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div> -->
                                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="kendaraan">Jenis Kendaraan</label>
                                    <input type="text" class="form-control" id="kendaraan" name="kendaraan" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="no_telp">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="kamar">Kamar</label>
                                    <select name="kamar" class="form-control" id="kamar">
                                        <?php
                                        foreach($kamar_kosong as $kmr) {
                                        ?>
                                            <option value="<?php echo $kmr['id']; ?>" data-name="<?php echo $kmr['room_name']; ?>">
                                                <?php echo $kmr['room_name']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <script>
                                var selection = document.getElementById("kamar");
                                var today = new Date();
                                var dd = String(today.getDate()).padStart(2, '0');
                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!

                                selection.onchange = function(event){
                                    var name = event.target.options[event.target.selectedIndex].dataset.name;
                                    document.getElementById("username").value = name + dd + mm;
                                    document.getElementById("password").value = name + dd + mm;
                                };
                            </script>
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