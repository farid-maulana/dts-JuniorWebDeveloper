<?php
$info_user = $user->informasiUser($_SESSION['username']);
$rules = $aturan->tampilAturan();
foreach($info_user as $info) {
    $pesan = $message->getMessageByKtpAndKamar($info['no_ktp'], $info['room_id']);
}
?>
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pelaporan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Pelaporan</a></li>
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
                    <div class="card-header d-flex justify-content-between">
                        <h5 style="font-size: 20px">History Pelaporan</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Isi Pesan</th>
                                        <th>Tipe Pesan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach($pesan as $msg) {
                                    ?>
                                        <tr>
                                            <td><?php echo ++$no; ?></td>
                                            <td><?php echo $msg['tanggal']; ?></td>
                                            <td><?php echo $msg['message_content']; ?></td>
                                            <td><?php echo ($msg['message_type'] == 1 ? 'Pelaporan' : 'Perizinan'); ?></td>
                                            <td></td>
                                        </tr>
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