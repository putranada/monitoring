<?php
include '../koneksi.php';

// Mengambil ID TV yang dipilih
$id_tv = $_POST['id_tv'];

// Query untuk mengambil program-program yang ditayangkan oleh TV tersebut
$query = "SELECT * FROM program_tv WHERE tv = '$id_tv'";

$program = mysqli_query($conn, $query);

if (mysqli_num_rows($program) > 0) {
    while ($row = mysqli_fetch_array($program)) {
        echo "<option value='" . $row['id_program'] . "'>" . $row['nama_program'] . "</option>";
    }
} else {
    echo "<option value=''>Tidak Ada Program</option>";
    exit;
}
