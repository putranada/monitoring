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

$id = $_GET['id'];
$query = "delete from bab where id_bab = '$id'";
$delete = mysqli_query($conn, $query);
if($delete){
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dihapus');
    document.location.href = 'p3sps.php';
    </script> ";
}
?>