<?php
$info_user = $user->informasiUser($_SESSION['username']);
$rules = $aturan->tampilAturan();
?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- support-section start -->
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="card">
                            <h5 class="card-header">ATURAN KOST</h5>
                            <div class="card-body">
                                <?php
                                foreach($rules as $rule) {
                                    echo $rule['rule_desc'];
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card">
                            <h5 class="card-header">INFORMASI KAMAR</h5>
                            <div class="card-body">
                                <ul style="list-style-type:none;">
                                    <?php
                                    foreach($info_user as $info) {
                                    ?>
                                        <li><b>Nama Kamar : </b><?php echo $info['room_name']; ?></li>
                                        <li><b>Tipe Kamar : </b><?php echo $info['type_name']; ?></li>
                                        <li><b>Luas Kamar : </b><?php ?></li>
                                        <li><b>Fasilitas  : </b><?php echo $info['fasilitas']; ?></li>
                                        <br>
                                        <li><b>Nama Penghuni : </b><?php echo $info['full_name']; ?></li>
                                        <li><b>Jenis Kelamin : </b><?php echo $info['jenis_kelamin']; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>