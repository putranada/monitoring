<?php
session_start();
if ($_SESSION['peran'] == "USER") {
    header("Location: logout.php");
    exit;
}
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

include '../koneksi.php';
$id = $_GET['id'];
$query_monitoring = "select * from monitoring_tv where id = '$id'";
$result_monitoring = mysqli_query($conn, $query_monitoring);
$row_monitoring = mysqli_fetch_assoc($result_monitoring);

if (isset($_POST["submit"])) {
    $tgl = htmlspecialchars($_POST["tgl"]);
    $jam = htmlspecialchars($_POST["jam"]);
    $program = htmlspecialchars($_POST["program"]);
    $time = htmlspecialchars($_POST["time"]);
    $ket = htmlspecialchars($_POST["ket"]);
    $pasal = htmlspecialchars($_POST["pasal"]);
    $tv = htmlspecialchars($_POST["tv"]);

    // echo "UPDATE monitoring_tv SET tanggal = '$tgl', jam_tayang = '$jam', 
    // program = '$program', time_code = '$time', keterangan = '$ket', pasal = '$pasal', tv = '$tv' where id = '$id'";
    $query = "UPDATE monitoring_tv SET tanggal = '$tgl', jam_tayang = '$jam', 
    program = '$program', time_code = '$time', keterangan = '$ket', pasal = '$pasal', tv = '$tv' where id = '$id'";
    $edit = mysqli_query($conn, $query);
    if ($edit) {
        echo "<script type='text/javascript'>
    alert('Data Berhasil Disimpan');
    document.location.href = 'monitoring_tv.php';
    </script>
    ";
    } else {
        echo "<script type='text/javascript'>
    alert('Data gagal disimpan');
    document.location.href = 'edit-monitoring-tv.php?id='$id';
    </script>
    ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Monitoring TV | KPID Kalsel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="shortcut icon" href="../dist/img/user.png">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include "theme-header.php"; ?>
        <?php include "theme-sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>EDIT DATA MONITORING</h1>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="monitoring_tv.php">Monitoring TV</a></li>
                                <li class="breadcrumb-item active">Edit Data Monitoring</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">EDIT DATA MONITORING TV</h3>
                                </div>
                                <form action="" method="post">
                                    <div class="card-body">
                                        <div class="form-grup">
                                            <label for="tgl">TANGGAL : </label>
                                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $row_monitoring['tanggal']; ?>" placeholder="Masukkan monitoring" required>
                                        </div>
                                        <div class="form-grup">
                                            <label for="timecode">JAM TAYANG : </label>
                                            <input type="text" class="form-control" id="jam" name="jam" value="<?php echo $row_monitoring['jam_tayang']; ?>" placeholder="Masukkan Jam Tayang Monitoring" required>
                                        </div>
                                        <div class="form-group">
                                            <label>TV :</label>
                                            <select name="tv" class="form-control" required="required">
                                                <?php
                                                $pro = mysqli_query($conn, "SELECT * FROM data_tv ORDER BY nama_stasiun ASC");
                                                while ($k = mysqli_fetch_array($pro)) {
                                                ?>
                                                    <option value="<?php echo $k['id_tv']; ?>">
                                                        <?php echo $k['nama_stasiun']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>PROGRAM :</label>
                                            <select name="program" class="form-control" required="required">
                                                <?php
                                                $pro = mysqli_query($conn, "SELECT * FROM program_tv ORDER BY nama_program ASC");
                                                while ($k = mysqli_fetch_array($pro)) {
                                                ?>
                                                    <option value="<?php echo $k['id_program']; ?>">
                                                        <?php echo $k['nama_program']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-grup">
                                            <label for="timecode">TIME CODE : </label>
                                            <input type="text" class="form-control" id="time" name="time" value="<?php echo $row_monitoring['time_code']; ?>" placeholder="Masukkan Time Code Monitoring" required>
                                        </div>
                                        <div class="form-grup">
                                            <label for="ket">KETERANGAN : </label>
                                            <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $row_monitoring['keterangan']; ?>" placeholder="Masukkan Keterangan" required>
                                        </div>
                                        <div class="form-group">
                                            <label>PASAL :</label>
                                            <select name="pasal" class="form-control" required="required">
                                                <?php
                                                $pasal = mysqli_query($conn, "SELECT * FROM pasal ORDER BY id ASC");
                                                while ($k = mysqli_fetch_array($pasal)) {
                                                ?>
                                                    <option value="<?php echo $k['id']; ?>">
                                                        <?php echo $k['pasal']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-primary mr-1" type="submit" name="submit">Simpan</button>
                                            <a href="monitoring_tv.php" class="btn btn-secondary mr-1">Batal</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/jszip/jszip.min.js"></script>
        <script src="../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->

        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </div>
</body>
<?php include 'theme-footer.php'; ?>