<link rel="shortcut icon" href="img/user.png">
<title>Monitoring TV KPID Kalimantan Selatan</title>
    <link href="../assets/css/solar-bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/css/general.css" rel="stylesheet"/>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>  
    <script src="..//tinymce/tinymce.min.js"></script>
<?php 
        include '../dbprint.php';
        include '../functions.php';
        $select = mysqli_query($koneksi, 'select * from tb_langgar where id_langgar = '.$_GET['id_langgar']);
    ?>
    <head>
	<title>contoh surat pengunguman</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
        

	</style>
</head>
<body>
    <center>
		<table>
			<tr>
				<td>
				<center>
                    <font size="3"><b>LAPORAN TIM MONITORING</b></font><br>
					<font size="3"><b>KOMISI PENYIARAN INDONESIA DAERAH KALIMANTAN SELATAN</b></font><br>
				</center>
				</td>
			</tr>
<break/>
<div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="nw">
            <th>No</th>
                <th>BAB</th>
                <th>Judul</th>
                <th>Pasal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
    
        $sql = "SELECT *  FROM tb_langgar WHERE bab LIKE '%$q%' ORDER BY id_langgar";
        $rows = $db->get_results($sql);
        
        foreach($rows as $row):?>
        <tr>
            <td><?=++$no?></td>
            <td><?=$row->bab?></td>
            <td><?=$row->Judul?></td>
            <td><?=$row->pasal?></td>
            <td><?=$row->keterangan?></td>
        </tr>
        <?php endforeach;    ?>
        </table>
    </div>

<script>
      window.print()
  </script>

<br>
<table width="625">
    <tr>
        <td width=""430></td>
        <td class="text"></td>
        <td style="width: 30%; text-align: center; float: right;">Banjarbaru, ... ............ ..... <br>Koordinator Bidang Pengawasan Isi Siaran </td>
    </tr>
    <tr>
        <td width=""430></td>
        <td class="text"></td> <br><br><br>
        <td style="width: 30%; text-align: center; float: right;"> <br><br><br> ROZY MAULANA, SH <br></td>
    </tr>
</table>