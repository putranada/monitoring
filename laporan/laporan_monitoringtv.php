<?php

include '../functions.php';
include '../config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoring Komisi Penyiaran Indonesia Daerah Kalimantan Selatan</title>

    <!-- Custom fonts for this template-->
    
    <link rel="shortcut icon" href="../img/user.png">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-user me-2"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KPID KALSEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="../datamaster/dat_tv.php" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/datamaster/dat_tv.php">Data TV</a>
                    </div>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar" href="../datamaster/dat_radio.php">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/datamaster/dat_radio.php">Data Radio</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../program_tv/program_tv.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Program TV</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" href="../programtv/program_tvri.php">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/programtv/program_tvri.php">TVRI</a>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" href="../programtv/program_dutatv.php">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/programtv/program_dutatv.php">DUTA TV</a>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" href="../programtv/program_kompastv.php">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/programtv/program_kompastv.php">KOMPAS TV</a>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" href="../programtv/program_rcti.php"">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/programtv/program_rcti.php">RCTI</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/monitoring/programradio/program_radio.php" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Program Radio</span>
                </a>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../pelanggaran/langgar.php" data-toggle="collapse" data-target="#collapseThree"
                 aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-folder"></i><span>Data Pelanggaran</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/jenisp/jenis_p.php">Jenis Pelanggaran TV</a>
                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/jenisp/jenis_p.php">Jenis Pelanggaran Radio</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../monitoring/tv.php" data-toggle="collapse" data-target="#collapseFour" 
                aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-folder"></i><span>Monitoring</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/monitoring/tv.php">Monitoring TV</a>
                    </div>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                    data-parent="#accordionSidebar" href="../radio/radio.php">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/radio/radio.php">Monitoring Radio</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                 <a class="nav-link collapsed" href="../pelanggaran/langgar.php" data-toggle="collapse" data-target="#collapseFive" 
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-folder"></i><span>Laporan Pelanggaran</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/pelanggaran/langgar.php">Laporan Pelanggaran TV</a>
                    </div>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/pelanggaran/langgar.php">Laporan Pelanggaran Radio</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                 <a class="nav-link collapsed" href="../pprog/plprogtv.php" data-toggle="collapse" data-target="#collapseSix" 
                    aria-expanded="true" aria-controls="collapsSix">
                    <i class="fas fa-fw fa-folder"></i><span>Pelanggaran Program</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/pprog/plprogtv.php">Pelanggaran Program TV</a>
                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/monitoring/pprog/plprogtv.php">Pelanggaran Program Radio</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Halaman</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.php">Login</a>
                        <a class="collapse-item" href="register.php">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="../img/user.png" alt="...">
                <p class="text-center mb-2"><strong>Komisi Penyiaran Indonesia Daerah Kalimantan Selatan <br></strong>Lembaga Independen Negara</p>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">KPID KALSEL</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<div class="page-header">
    <h1>Laporan Monitoring TV</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="tv"/>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>"/>            
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>            
                <a class="btn btn-primary" href="../monitoring/print_monitoring.php"><span class="glyphicon glyphicon-plus"></span>Print</a>
            </div>
            <?php 
	        $nama_stasiun="";
            if (isset($_POST['filter'])) {
            $nama_stasiun = $_POST['nama_stasiun'];
            }
            ?>
            <form method="POST" action="">
		    <div class="col-sm-3">
		        <div class="form-group">
		            <select name="nama stasiun" id="id_tv" class="form-control">
		                <option value="">Filter Laporan</option>
		                <option value="TVRI KALSEL" <?php if ($nama_stasiun=="TVRI KALSEL"){ echo "selected"; } ?>>TVRI KALSEL</option>
		                <option value="DUTA TV" <?php if ($nama_stasiun=="DUTA TV"){ echo "selected"; } ?>>DUTA TV</option>
                        <option value="RCTI" <?php if ($nama_stasiun=="RCTI"){ echo "selected"; } ?>>RCTI</option>
                        <option value="KOMPAS TV" <?php if ($nama_stasiun=="KOMPAS TV"){ echo "selected"; } ?>>KOMPAS TV</option>
		            </select>
		        </div>
		    </div>
            <div class="col-sm-4">
                <div class="form-group form-inline">
                    <label>Keyword</label>
                        <input type="text" name="s_keyword" id="s_keyword" class="form-control">
                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="nw">
                <th>No</th>
                <th>Hari/Tanggal</th>
                <th>Nama Stasiun</th>
                <th>Jam Tayang</th>
                <th>Program/Judul Acara</th>
                <th>Time Code</th>
                <th>Keterangan</th>
                <th>Pasal</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        
        $sql = "SELECT * 
                FROM tb_tv p
                WHERE tanggal LIKE '%$q%' 
                ORDER BY id_tv";
        $rows = $db->get_results($sql);
        
        foreach($rows as $row):?>
        <tr>
            <td><?=++$no?></td>
            <td><?=$row->hari?>, <?=$row->tanggal?></td>
            <td><?=$row->nama_stasiun?></td>
            <td><?=$row->jam_tayang?></td>
            <td><?=$row->program?></td>
            <td><?=$row->time_code?></td>
            <td><?=$row->keterangan?></td>
            <td><?=$row->pasal?></td>
        </tr>
        <?php endforeach;    ?>
    </table>
</div>
</div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
	    $('.data').load("data.php");
	    $("#search").click(function(){
	    	var jurusan = $("#s_jurusan").val();
	    	var keyword = $("#s_keyword").val();
	    	$.ajax({
	            type: 'POST',
	            url: "data.php",
	            data: {jurusan: jurusan, keyword:keyword},
	            success: function(hasil) {
	                $('.data').html(hasil);
	            }
	        });
	    });
	});
    </script>
</body>
</html>