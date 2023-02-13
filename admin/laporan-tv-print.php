 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Laporan</title>
     <link rel="shortcut icon" href="../dist/img/user.png">
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
     <hr>
     <?php
        include '../koneksi.php';

        if (isset($_GET['id_tv'])) {
            $tv = $_GET['id_tv'];

        ?>

         <p align="center"><b>LAPORAN DATA PROGRAM TV</b></p>
         <table>
             <td width="150px">STASIUN TV</td>
             <td width="2px">:</td>
             <td>
             <?php
                $k = mysqli_query($conn, "select * from data_tv where id_tv='$tv'");
                $kk = mysqli_fetch_assoc($k);
                echo $kk['nama_stasiun'];
            }
                ?>

             </td>
             </tr>
         </table>

         </div>
         </div>
         <?php
            if (isset($_GET['id_tv'])) {
                $tv = $_GET['id_tv'];
                $data = mysqli_query($conn, "SELECT program_tv.*, data_tv.nama_stasiun
                                FROM program_tv
                                JOIN data_tv ON program_tv.tv = data_tv.id_tv
                                WHERE data_tv.id_tv = '$tv'");
                if (mysqli_num_rows($data) > 0) { ?>
                 <table border="1" cellpadding="4" cellspacing="0" width="100%">
                     <thead>
                         <tr>
                             <th class="text-center" width="10%">NO</th>
                             <th class="text-center" width="75%">PROGRAM TV</th>
                         </tr>
                     </thead>
                     <?php
                        $no = 1;
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                         <tbody>
                             <?
                                $no++;
                                ?>
                             <tr>
                                 <td class="text-center" width="10%"><?php echo $no++; ?></td>
                                 <td><?php echo $d['nama_program']; ?></td>
                             </tr>
                 <?php
                        }
                    }
                } ?>
                         </tbody>
                 </table>





                 <br>
                 <br>
                 <br>
                 <br>

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
                                 <p>AZHARI FADLI, S.PD.I<br>
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
                             <center>Koordinator Bidang Pengawasan Isi Siaran</center>
                             </p>
                             <br>
                             <br>
                             <center><br><br> ROZY MAULANA, SH</center><br>
                         </td>
                     </tr>
                 </table>

                 <script>
                     window.print();
                     $(document).ready(function() {

                     });
                 </script>

 </body>

 </html>