<?php
include '../process/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyKost</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
    <?php 
    session_start();
    include '../process/TipeKamar.php';
    include '../process/Kamar.php';
    include '../process/Penyewa.php';
    include '../process/User.php';
    include '../process/Message.php';
    include '../process/Aturan.php';
    $tipekamar = new TipeKamar();
    $kamar = new Kamar();
    $penyewa = new Penyewa();
    $user = new User();
    $message = new Message();
    $aturan = new Aturan();
    
    if(!isset($_SESSION['username'])) {
        header("location:../index.php");
    } else {
        if($_SESSION['role'] == 'admin') {
            include 'sidebar_admin.php'; 
        } else {
            include 'sidebar_penyewa.php';
    ?>
            <div class="fixed-button active">
                <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <i class="feather icon-message-square" aria-hidden="true"></i> Send message to admin
                </button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="../process/process.php?aksi=tambah_message" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="type_message" class="col-form-label">Tipe Message:</label>
                                    <select name="type_message" id="type_message" class="form-control">
                                        <option value="1">Pelaporan Fasilitas</option>
                                        <option value="2">Perizinan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message_content" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message_content" name="message_content"></textarea>
                                </div>
                                <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    <?php include 'header.php'; ?>
	<!-- [ Header ] end -->
	
    <!-- [ Main Content ] start -->
    <?php 
    if (isset($_GET['menu'])) {
        switch ($_GET['menu']) {
            case 'dashboard':
                if($_SESSION['role'] == 'admin') {
                    include '../admin/dashboard.php';
                } else {
                    include '../penyewa/dashboard.php';
                }
                break;
            case 'kamar':
                include '../admin/kamar.php';
                break;
            case 'add_tipe_kamar':
                include '../admin/add_tipe_kamar.php';
                break;
            case 'add_kamar':
                include '../admin/add_kamar.php';
                break;
            case 'penyewa':
                include '../admin/penyewa.php';
                break;
            case 'add_penyewa':
                include '../admin/add_penyewa.php';
                break;
            case 'transaksi':
                include '../admin/transaksi.php';
                break;
            case 'aturan':
                include '../admin/aturan.php';
                break;
            case 'pembayaran':
                include '../penyewa/pembayaran.php';
                break;
            case 'pembayaran_penyewa':
                include '../penyewa/add_pembayaran.php';
            break;
            case 'history_message':
                include '../penyewa/history_message.php';
                break;
            default:
                if($_SESSION['role'] == 'admin') {
                    include '../admin/dashboard.php';
                } else {
                    include '../penyewa/dashboard.php';
                }
                break;
        }
    } else {
        if($_SESSION['role'] == 'admin') {
            include '../admin/dashboard.php';
        } else {
            include '../penyewa/dashboard.php';
        }
    }    
    ?>

    <!-- Required Js -->
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/ripple.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <!-- Summernote -->
    <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote({
            tabsize: 2,
            height: 250
        })
    })
    </script>
</body>

</html>