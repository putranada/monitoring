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

$query = "SELECT * FROM data_radio";
$result = mysqli_query($conn, $query);

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
                            <h1>DATA STASIUN RADIO</h1>
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
                                    <a href="tambah-data-radio.php" class="btn btn-primary"><i
                                            class="fa fa-plus-circle">
                                            Tambah Stasiun Radio</i></a>
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="10%">NO</th>
                                                    <th class="text-center" width="15%">Action</th>
                                                    <th class="text-center" width="75%">Nama Stasiun Radio</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)){ ?>
                                                <tr>
                                                    <td class="text-center" width="10%"><?php echo $no;?></td>
                                                    <td>

                                                        <a href="edit-data-radio.php?id=<?php echo $row['id_radio'];?>"
                                                            class="btn btn-success btn-xs mr-1"><i class="fa fa-edit">
                                                                Ubah</i> </a>

                                                        <a href="hapus-data-radio.php?id=<?php echo $row['id_radio'];?>"
                                                            class="btn btn-danger btn-xs mr-1"><i class="fa fa-trash">
                                                                Hapus</i> </a>
                                                    </td>

                                                    <td><?php echo $row['nama_stasiun'];?></td>


                                                </tr>
                                                <?php $no++;
}?>
                                            </tbody>

                                        </table>
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