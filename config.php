<?php
//include dirname(__FILE__) . '/../config.php';

$config["server"]='localhost';
$config["username"]='root';
$config["password"]='';
$config["database_name"]='monitoring';

$koneksi = mysqli_connect($config["server"],$config["username"],$config["password"],$config["database_name"]);

?>