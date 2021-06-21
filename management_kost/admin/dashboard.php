<?php
$pesan = $message->tampilMessage();
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
                    <div class="col-sm-4">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h1 class="m-0 text-c-blue"><?php echo $kamar->countKamar() ?></h1>
                                <span class="text-c-blue">Total Kamar</span>
                                <p class="mb-3 mt-3 text-white">Total number of support requests that come in.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h1 class="m-0 text-c-green"><?php echo $kamar->countKamarKosong() ?></h1>
                                <span class="text-c-green">Kamar Kosong</span>
                                <p class="mb-3 mt-3 text-white">Total number of support requests that come in.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h1 class="m-0 text-c-red"><?php echo $kamar->countKamarTerpakai() ?></h1>
                                <span class="text-c-red">Kamar Terpakai</span>
                                <p class="mb-3 mt-3 text-white">Total number of support requests that come in.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>
            <!-- prject ,team member start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Pelaporan</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kamar</th>
                                        <th>Nama</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal Lapor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach($pesan as $psn) {
                                        if($psn['message_type'] == 1) {
                                    ?>
                                            <tr>
                                                <td><?php echo ++$no; ?></td>
                                                <td><?php echo $psn['room_name']; ?></td>
                                                <td><?php echo $psn['full_name']; ?></td>
                                                <td><?php echo $psn['message_content']; ?></td>
                                                <td><?php echo $psn['tanggal']; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Perizinan</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Kamar</th>
                                        <th>Izin</th>
                                        <th>Tanggal Izin</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 0;
                                    foreach($pesan as $psn) {
                                        if($psn['message_type'] == 2) {
                                    ?>
                                            <tr>
                                                <td><?php echo ++$no; ?></td>
                                                <td><?php echo $psn['full_name']; ?></td>
                                                <td><?php echo $psn['room_name']; ?></td>
                                                <td><?php echo $psn['message_content']; ?></td>
                                                <td><?php echo $psn['tanggal']; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- prject ,team member start -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>