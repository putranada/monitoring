<?php
include 'koneksi.php';

// Mengambil ID TV yang dipilih
$id_tv = $_POST['id_tv'];

// Query untuk mengambil program-program yang ditayangkan oleh TV tersebut
$query = "SELECT p.id_program, p.nama_program
FROM data_tv t
JOIN program_tv_stasiun ps ON t.id_tv = ps.id_tv
JOIN program_tv p ON ps.id_program = p.id_program
WHERE t.id_tv = '$id_tv'
ORDER BY p.nama_program ASC";

$program = mysqli_query($conn, $query);

// Jika ada program yang ditayangkan, tampilkan pada dropdown
if(mysqli_num_rows($program) > 0){
    echo '<option value="">- Pilih -</option>';
    while($data = mysqli_fetch_array($program)){
        echo '<option value="'.$data['id_program'].'">'.$data['nama_program'].'</option>';
    }
}else{
    echo '<option value="">Tidak ada program ditayangkan</option>';
}

mysqli_close($conn);
?>