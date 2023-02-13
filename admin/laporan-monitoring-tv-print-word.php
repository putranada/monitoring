 <?php
    header("Content-Type: application/doc");
    header("Content-Disposition: attachment; filename=cetak.doc");
    echo '
    <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Laporan</title>
 </head>

 <body>
     <center>
         <table>
             <img src="../assets/logo.png" width="100" heigt="100" align="center">
             <tr>
                 <td>
                     <center>
                         <font size="5"><b>KOMISI PENYIARAN INDONESIA </b></font><br>
                         <font size="5"><b>DAERAH KALIMANTAN SELATAN</b></font><br>
                         <font size="4" color="#Ff0000"><b>LEMBAGA NEGARA INDEPENDEN</b></font><br>
                         <font size="3">Jln. Dharma Praja II No. 2 Kawasan Perkantoran
                             Provinsi Kalimantan Selatan
                         </font>
                     </center>
                 </td>
             </tr>
         </table>
     </center>
     <hr>';
    include '../koneksi.php';
    if (isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari']) && isset($_GET['id_tv'])) {
        $tgl_dari = $_GET['tanggal_dari'];
        $tgl_sampai = $_GET['tanggal_sampai'];
        $tv = $_GET['id_tv'];
        echo '
     <p align="center"><b>LAPORAN MONITORING TV</b></p>
     <table>
         <tr>
             <td width="150px">Hari/Tanggal</td>
             <td width="2px">: </td>
             <td>';
        $bulan_sampai = date('F', strtotime($tgl_sampai));
        switch ($bulan_sampai) {
            case "January":
                $bulan_sampai = "Januari";
                break;
            case "February":
                $bulan_sampai = "Februari";
                break;
            case "March":
                $bulan_sampai = "Maret";
                break;
            case "April":
                $bulan_sampai = "April";
                break;
            case "May":
                $bulan_sampai = "Mei";
                break;
            case "June":
                $bulan_sampai = "Juni";
                break;
            case "July":
                $bulan_sampai = "Juli";
                break;
            case "August":
                $bulan_sampai = "Agustus";
                break;
            case "September":
                $bulan_sampai = "September";
                break;
            case "October":
                $bulan_sampai = "Oktober";
                break;
            case "November":
                $bulan_sampai = "November";
                break;
            case "December":
                $bulan_sampai = "Desember";
                break;
        }
        $hari_sampai = date('D', strtotime($tgl_sampai));
        switch ($hari_sampai) {
            case "Sun":
                $hari_sampai = "Minggu";
                break;
            case "Mon":
                $hari_sampai = "Senin";
                break;
            case "Tue":
                $hari_sampai = "Selasa";
                break;
            case "Wed":
                $hari_sampai = "Rabu";
                break;
            case "Thu":
                $hari_sampai = "Kamis";
                break;
            case "Fri":
                $hari_sampai = "Jumat";
                break;
            case "Sat":
                $hari_sampai = "Sabtu";
                break;
        }
        $bulan = date('F', strtotime($tgl_dari));
        switch ($bulan) {
            case "January":
                $bulan = "Januari";
                break;
            case "February":
                $bulan = "Februari";
                break;
            case "March":
                $bulan = "Maret";
                break;
            case "April":
                $bulan = "April";
                break;
            case "May":
                $bulan = "Mei";
                break;
            case "June":
                $bulan = "Juni";
                break;
            case "July":
                $bulan = "Juli";
                break;
            case "August":
                $bulan = "Agustus";
                break;
            case "September":
                $bulan = "September";
                break;
            case "October":
                $bulan = "Oktober";
                break;
            case "November":
                $bulan = "November";
                break;
            case "December":
                $bulan = "Desember";
                break;
        }
        $hari = date('D', strtotime($tgl_dari));
        switch ($hari) {
            case "Sun":
                $hari = "Minggu";
                break;
            case "Mon":
                $hari = "Senin";
                break;
            case "Tue":
                $hari = "Selasa";
                break;
            case "Wed":
                $hari = "Rabu";
                break;
            case "Thu":
                $hari = "Kamis";
                break;
            case "Fri":
                $hari = "Jumat";
                break;
            case "Sat":
                $hari = "Sabtu";
                break;
        }
        echo $hari . ", " . date('d ', strtotime($tgl_dari)) . $bulan . date(' Y', strtotime($tgl_dari)) . " s/d " . $hari_sampai . ", " . date('d ', strtotime($tgl_sampai)) . $bulan_sampai . date(' Y', strtotime($tgl_sampai));
        echo '
     </td>
     </tr>
     <td width="150px">Stasiun</td>
     <td width="2px">:</td>
     <td>';

        $k = mysqli_query($conn, "select * from data_tv where id_tv='$tv'");
        $kk = mysqli_fetch_assoc($k);
        echo $kk['nama_stasiun'];
        echo '
     </td>
     </tr>
     </table>

     <table border="1" cellpadding="4" cellspacing="0" width="100%">
         <thead>
             <tr>
                 <th class="text-center" width="5%">NO</th>
                 <th class="text-center" width="10%">JAM TAYANG</th>
                 <th class="text-center" width="25%">PROGRAM/JUDUL ACARAN</th>
                 <th class="text-center" width="10%">TIME CODE</th>
                 <th class="text-center" width="30%">KETERANGAN</th>
                 <th class="text-center" width="20%">PASAL</th>
             </tr>
         </thead>
         <tbody>';

        $no = 1;
        if (isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari']) && isset($_GET['id_tv'])) {
            $tgl_dari = $_GET['tanggal_dari'];
            $tgl_sampai = $_GET['tanggal_sampai'];
            $tv = $_GET['id_tv'];
            $query = "SELECT monitoring_tv.*, pasal.pasal, data_tv.nama_stasiun, program_tv.nama_program
              FROM monitoring_tv
              JOIN data_tv ON monitoring_tv.tv = data_tv.id_tv
              JOIN pasal ON monitoring_tv.pasal = pasal.id
              JOIN program_tv ON monitoring_tv.program = program_tv.id_program
              WHERE monitoring_tv.tanggal BETWEEN '$tgl_dari' AND '$tgl_sampai' AND data_tv.id_tv = '$tv'";
            $data = mysqli_query($conn, $query);
            while ($d = mysqli_fetch_array($data)) {
    ?> <tr>
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
        }
    }
    ?>

 <table width="100%">
     <tr>
         <td width="250px">
             <p>
                 <br><br>
                 <br>
                 <center>Mengetahui,</center>
             </p>
             <br>
             <br>
             <br>
             <center>
                 <p>staff<br>
             </center>
         </td>
         <td></td>
         <td width="250px">
             <center>
                 <p>Banjarbaru, <?php
                                $tanggal = date('d F Y');
                                $tanggal = str_replace(
                                    ['January', 'February', 'March', 'April', 'May', 'June', 'Jule', 'August', 'September', 'October', 'November', 'December'],
                                    ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agutus', 'September', 'Oktober', 'November', 'Desember'],
                                    $tanggal
                                );
                                echo $tanggal; // contoh hasil: "03-Jan-21"
                                ?>
                 </p>
             </center>
             <center><b>Komisi Penyiaran Indonesia</b></center>
             <center>
                 <b>Kalimantan Selatan</b>
             </center>
             <center>Bendahara</center>
             </p>
             <br>
             <br>
             <br>
             staff<br>
         </td>
     </tr>
 </table>



 </body>

 </html>