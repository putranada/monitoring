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

     if (isset($_GET['id_pelanggaran'])) {
         $radio = $_GET['id_pelanggaran'];

         ?>

     <p align="center"><b>LAPORAN DATA PELANGGARAN PROGRAM RADIO</b></p>
     <table>
         <td width="150px">PELANGGARAN PROGRAM RADIO</td>
         <td width="2px">:</td>
         <td>
             <?php
             $k = mysqli_query($conn, "select * from pelanggaran_radio where id_pelanggaran='$pelanggaran'");
             $kk = mysqli_fetch_assoc($k);
             echo $kk['nama_program'];
     }
                                ?>

         </td>
         </tr>
     </table>

     </div>
     </div>
     <?php
     if (isset($_GET['id_program'])) {
         $program = $_GET['id_program'];
         $data = mysqli_query($conn, "SELECT monitoring_radio.*, program_radio.nama_program, pasal.pasal
                                FROM monitoring_radio 
                                JOIN program_radio ON monitoring_radio.radio = program_radio.id_program 
                                JOIN pasal ON monitoring_radio.pasal = pasal.id 
                                WHERE program_radio.id_program = '$program'");
         if (mysqli_num_rows($data) > 0) { ?>
     <table border="1" cellpadding="4" cellspacing="0" width="100%">
         <thead>
             <tr>
                 <th class="text-center" width="5%">NO</th>
                 <th class="text-center" width="30%">PROGRAM RADIO  </th>
                 <th class="text-center" width="55%">PELANGGARAN</th>
                 <th class="text-center" width="75%">PASAL</th>
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
                 <td><?php echo $d['keterangan']; ?></td>
                 <td><?php echo $d['pasal']; ?></td>
             </tr>
             <?php
           }
         }
     }?>
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