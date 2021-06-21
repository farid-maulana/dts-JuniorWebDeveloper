<?php
$count = $aturan->countAturan();
$id = $user->getIdByUsername($_SESSION['username']);
?>
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Aturan Kost</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?menu=dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Aturan Kost</a></li>
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
                        <h5>Setting Aturan Kost</h5>
                    </div>
                    <form action="../process/process.php?aksi=aturan" method="POST">
                        <div class="card-body mb-0 pb-0">
                            <textarea 
                                class="textarea" 
                                placeholder="Place some text here" 
                                name="rule"
                                style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?php
                                if($count != 0) {
                                    $data = $aturan->tampilAturan();
                                    foreach($data as $dt) {
                                        echo $dt['rule_desc'];
                                    } 
                                }
                                ?>
                            </textarea>
                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- [ basic-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>