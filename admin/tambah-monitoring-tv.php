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

date_default_timezone_set('Asia/Singapore');
if (isset($_POST["submit"])) {

    $tgl = htmlspecialchars($_POST["tgl"]);
    $jam = htmlspecialchars($_POST["jam"]);
    $program = htmlspecialchars($_POST["id_program"]);
    $time = htmlspecialchars($_POST["time"]);
    $ket = htmlspecialchars($_POST["ket"]);
    $pasal = htmlspecialchars($_POST["pasal"]);
    $tv = htmlspecialchars($_POST["tv"]);
    // echo "INSERT INTO monitoring_tv VALUES ('','$tgl','$jam','$program','$time','$ket','$pasal')";
    $query = "INSERT INTO monitoring_tv VALUES ('','$tgl','$jam','$program','$time','$ket','$pasal','$tv')";
    $simpan = mysqli_query($conn, $query);

    if ($simpan) {
        echo "
        <script type='text/javascript'>alert('Data Berhasil Disimpan');
        document.location.href = 'monitoring_tv.php'</script>";
    } else {
        echo "
        <script type='text/javascript'>alert('Data gagal disimpan');
        document.location.href = 'tambah-monitoring-tv.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Monitoring stasiun TV | KPID Kalsel</title>
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
                            <h1>TAMBAH STASIUN TV</h1>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="jabatan.php">stasiun TV</a></li>
                                <li class="breadcrumb-item active">Tambah stasiun TV</li>
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
                                    <h3 class="card-title">TAMBAH DATA MONITORING</h3>
                                </div>
                                <form action="" method="post">
                                    <div class="card-body">
                                        <div class="form-grup">
                                            <label for="tgl">Tanggal : </label>
                                            <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Pilih Tanggal" required>
                                        </div>
                                        <div class="form-grup">
                                            <label for="jam">Jam Tayang : </label>
                                            <input type="text" class="form-control" id="jam" name="jam" placeholder="Masukkan jam Tayang" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Stasiun TV :</label>
                                            <select name="tv" class="form-control" required="required" id="selectTV">
                                                <option value="">- Pilih -</option>
                                                <?php
                                                $tv = mysqli_query($conn, "SELECT * FROM data_tv ORDER BY nama_stasiun ASC");
                                                while ($k = mysqli_fetch_array($tv)) {
                                                ?>
                                                    <option value="<?php echo $k['id_tv']; ?>">
                                                        <?php echo $k['nama_stasiun']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Program :</label>
                                            <select name="program" class="form-control" required="required" id="selectProgram">
                                                <option value="">- Pilih -</option>
                                            </select>
                                        </div>

                                        <div class="form-grup">
                                            <label for="time">Time Code : </label>
                                            <input type="text" class="form-control" id="time" name="time" placeholder="Masukkan Time Code" required>
                                        </div>

                                        <div class="form-grup">
                                            <label for="ket">Keterangan : </label>
                                            <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukkan Keterangan Pelanggaran" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Pasal :</label>
                                            <select name="pasal" class="form-control" required="required">
                                                <option value="">- Pilih -</option>
                                                <?php
                                                $pasal = mysqli_query($conn, "SELECT * FROM pasal ORDER BY pasal ASC");
                                                while ($k = mysqli_fetch_array($pasal)) {
                                                ?>
                                                    <option value="<?php echo $k['id']; ?>">
                                                        <?php echo $k['pasal']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <input type="hidden" id="id" name="id" value="<?php echo $_SESSION["id"]; ?>">
                                        <div class="footer">
                                            <button class="btn btn-primary mr-1" type="submit" name="submit">Simpan</button>
                                            <a href="monitoring_tv.php" class="btn btn-secondary mr-1">Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- jQuery -->
        <script src=" ../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
        </script>
        <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js">
        </script>
        <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
        </script>
        <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js">
        </script>
        <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
        </script>
        <script src="../plugins/jszip/jszip.min.js"></script>
        <script src="../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.html5.min.js">
        </script>
        <script src="../plugins/datatables-buttons/js/buttons.print.min.js">
        </script>
        <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js">
        </script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->

        <!-- Page specific script -->

        <script type="text/javascript">
            $(document).ready(function() {
                $("#selectTV").change(function() {
                    var id_tv = $(this).val();
                    $.ajax({
                        url: "get_program.php",
                        method: "POST",
                        data: {
                            id_tv: id_tv
                        },
                        success: function(data) {
                            $("#selectProgram").html(data);
                        }
                    });
                });
            });
        </script>
    </div>
</body>
<?php include 'theme-footer.php'; ?>