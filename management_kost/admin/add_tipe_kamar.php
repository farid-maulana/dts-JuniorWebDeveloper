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
                            <li class="breadcrumb-item"><a href="#!">Tambah Tipe Kamar</a></li>
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
                        <form method="POST" action="../process/process.php?aksi=tambah_tipe_kamar">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="type_name">Nama Tipe Kamar</label>
                                    <input type="text" class="form-control" name="type_name" id="type_name" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga" placeholder="Rp 0,-">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <div class="row">
                                    <div class="col-md-3">        
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Wifi" id="wifi">
                                            <label class="custom-control-label" for="wifi">Wifi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Listrik" id="listrik">
                                            <label class="custom-control-label" for="listrik">Listrik</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Air Galon" id="air_galon">
                                            <label class="custom-control-label" for="air_galon">Air Galon</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Karpet" id="karpet">
                                            <label class="custom-control-label" for="karpet">Karpet</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Kursi & Meja" id="kursi_meja">
                                            <label class="custom-control-label" for="kursi_meja">Kursi & Meja</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Tv" id="tv">
                                            <label class="custom-control-label" for="tv">Tv</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Ac" id="ac">
                                            <label class="custom-control-label" for="ac">AC</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Kipas Angin" id="kipas_angin">
                                            <label class="custom-control-label" for="kipas_angin">Kipas Angin</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Lemari Baju" id="lemari">
                                            <label class="custom-control-label" for="lemari">Lemari Baju</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Kulkas" id="kulkas">
                                            <label class="custom-control-label" for="kulkas">Lemari Es/Kulkas</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Mesin Cuci Bersama" id="mesin_cuci">
                                            <label class="custom-control-label" for="mesin_cuci">Mesin Cuci Bersama</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Kamar Mandi Luar" id="km_luar">
                                            <label class="custom-control-label" for="km_luar">Kamar Mandi Luar</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Kamar Mandi Dalam" id="km_dalam">
                                            <label class="custom-control-label" for="km_dalam">Kamar Mandi Dalam</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Dapur Bersama" id="dapur">
                                            <label class="custom-control-label" for="dapur">Dapur Bersama</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Jemuran" id="jemuran">
                                            <label class="custom-control-label" for="jemuran">Jemuran</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Tempat Parkir" id="parkir">
                                            <label class="custom-control-label" for="parkir">Tempat Parkir</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Laundry + Setrika" id="laundry">
                                            <label class="custom-control-label" for="laundry">Laundry + Setrika</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Cleaning Service" id="cs">
                                            <label class="custom-control-label" for="cs">Cleaning Service</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fasilitas[]" value="Keamanan" id="keamanan">
                                            <label class="custom-control-label" for="keamanan">Keamanan</label>
                                        </div>
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