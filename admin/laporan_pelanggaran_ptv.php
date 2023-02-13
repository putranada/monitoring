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
    <title>Pelanggaran Program TV | KPID Kalsel</title>
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
                            <h1>PELANGGARAN PROGRAM TV</h1>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">Pelanggaran Program TV</li>
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Pilih Program TV</label>
                                                <select name="id_program" class="form-control" required="required">
                                                    <option value="">- Semua Program TV -</option>
                                                    <?php 
                                            $program = mysqli_query($conn, "SELECT * FROM program_tv");
                                            while ($k = mysqli_fetch_array($program)) {
                                            ?>
                                                    <option <?php if (isset($_GET['id_program'])) {
                                                            if ($_GET['id_program'] == $k['id_program']) {
                                                                echo "selected='selected'";
                                                            }
                                                        } ?> value="<?php echo $k['id_program']; ?>">
                                                        <?php echo $k['nama_program']; ?>
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
                                    if (isset($_GET['id_program'])) {
                                        $selected_id = $_GET['id_program'];
                                        ?>
                                <a href="laporan-pelanggaran-ptv-print.php?id_program=<?php echo $selected_id ?>" target="_blank"
                                    class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp
                                    PRINT</a><?php
 }
                                            ?>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="10%">NO</th>
                                                <th class="text-center" width="30%">PROGRAM TV</th>
                                                <th class="text-center" width="30%">PELANGGARAN</th>
                                                <th class="text-center" width="30%">PASAL</th>
                                            </tr>
                                        
                                            </thead>
                                            <tbody>
                                       <?php if (isset($_GET['id_program'])) {
                                        $no = 1;
                                        $program = $_GET['id_program'];
                                        $data = mysqli_query($conn, "SELECT monitoring_tv.*, program_tv.nama_program, pasal.pasal
                                        FROM monitoring_tv 
                                        JOIN program_tv ON monitoring_tv.tv = program_tv.id_program 
                                        JOIN pasal ON monitoring_tv.pasal = pasal.id 
                                        WHERE program_tv.id_program ='$program'");
                                        while ($d = mysqli_fetch_assoc($data)) {
                                           ?>
                                            <tr>
                                                <td class="text-center" width="10%"><?php echo $no; ?></td>
                                                <td><?php echo $d['nama_program']; ?></td>
                                                <td><?php echo $d['keterangan']; ?></td>
                                                <td><?php echo $d['pasal']; ?></td>
                                            
                                            </tr>
                                            <?php $no++;
                                        } ?>
                                        </tbody>
                                    </table>
                                    <?php
                                        } else {
                                            ?>
                                    <div class="alert alert-info text-center">
                                        Silahkan Filter Laporan Terlebih Dulu.
                                    </div>

                                    <?php
                                        }
                                    
                        ?>

                                </div>
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
<?php include 'theme-footer.php';?>