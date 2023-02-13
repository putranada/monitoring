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
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stasiun Radio | KPID Kalsel</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="shortcut icon" href="../dist/img/user.png">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include 'theme-header.php';?>
        <?php include 'theme-sidebar.php';?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DATA MONITORING RADIO</h1>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">Stasiun Radio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <form method="get" action="">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Mulai Tanggal</label>
                                                <input autocomplete="off" type="date" value="<?php if (isset($_GET['tanggal_dari'])) {
                                                                                            echo $_GET['tanggal_dari'];
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>" name="tanggal_dari"
                                                    class="form-control datepicker2" placeholder="Mulai Tanggal"
                                                    required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Sampai Tanggal</label>
                                                <input autocomplete="off" type="date" value="<?php if (isset($_GET['tanggal_sampai'])) {
                                                                                            echo $_GET['tanggal_sampai'];
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>" name="tanggal_sampai"
                                                    class="form-control datepicker2" placeholder="Sampai Tanggal"
                                                    required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Pilih Stasiun Radio</label>
                                                <select name="id_radio" class="form-control" required="required">
                                                    <option value="">- Semua Stasiun Radio -</option>
                                                    <?php 
                                            $tv = mysqli_query($conn, "SELECT * FROM data_radio");
                                            while ($k = mysqli_fetch_array($tv)) {
                                            ?>
                                                    <option <?php if (isset($_GET['id_radio'])) {
                                                            if ($_GET['id_radio'] == $k['id_radio']) {
                                                                echo "selected='selected'";
                                                            }
                                                        } ?> value="<?php echo $k['id_radio']; ?>">
                                                        <?php echo $k['nama_stasiun']; ?>
                                                    </option>
                                            </div> <?php
 }
                                            ?>
                                            </select> <input type="submit" value="TAMPILKAN"
                                                class="btn btn-md btn-primary mr-20">
                                        </div>
                                    </form>
                                </div>
                                <?php
                                    if (isset($_GET['id_radio'])) {
                                        $selected_id = $_GET['id_radio'];
                                        ?>
                                <a href="laporan-monitoring-tv-print.php?tanggal_dari=<?php echo $_GET['tanggal_dari'] ?>&tanggal_sampai=<?php echo $_GET['tanggal_sampai'] ?>&id_radio=<?php echo $selected_id ?>"
                                    target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp
                                    PRINT</a> | <a
                                    href="laporan-monitoring-tv-word.php?tanggal_dari=<?php echo $_GET['tanggal_dari'] ?>&tanggal_sampai=<?php echo $_GET['tanggal_sampai'] ?>&id_radio=<?php echo $selected_id ?>"
                                    target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp
                                    PRINT</a><?php
 }
                                            ?>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="5%">NO</th>
                                                <th class="text-center" width="10%">JAM TAYANG</th>
                                                <th class="text-center" width="25%">PROGRAM/JUDUL ACARAN</th>
                                                <th class="text-center" width="10%">FREKUENSI</th>
                                                <th class="text-center" width="30%">KETERANGAN</th>
                                                <th class="text-center" width="20%">PASAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$no = 1;
if (isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari']) && isset($_GET['id_radio'])) {
    $tgl_dari = $_GET['tanggal_dari'];
    $tgl_sampai = $_GET['tanggal_sampai'];
    $radio = $_GET['id_radio'];
    $query = "SELECT monitoring_radio.*, pasal.pasal, data_radio.nama_stasiun, program_radio.nama_program
              FROM monitoring_radio
              JOIN data_radio ON monitoring_radio.radio = data_radio.id_radio
              JOIN pasal ON monitoring_radio.pasal = pasal.id
              JOIN program_radio ON monitoring_radio.program = program_radio.id_program
              WHERE monitoring_radio.tanggal BETWEEN '$tgl_dari' AND '$tgl_sampai' AND data_radio.id_radio = '$radio'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        while ($d = mysqli_fetch_array($data)) {
            ?>
                                            <tr>
                                                <td class="text-center" width="10%"><?php echo $no; ?></td>
                                                <td><?php echo $d['jam_tayang']; ?></td>
                                                <td><?php echo $d['nama_program']; ?></td>
                                                <td><?php echo $d['time_code']; ?></td>
                                                <td><?php echo $d['keterangan']; ?></td>
                                                <td><?php echo $d['pasal']; ?></td>
                                            </tr>

                                            <?php
            $no++;
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    ?>

                                            <div class="alert alert-info text-center">
                                                Silahkan Filter Laporan Terlebih Dulu.
                                            </div>
                                            <?php
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- ./wrapper -->

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
    <script src="../dist/js/adminlte.min.js"></script>
</body>

<?php include 'theme-footer.php';?>