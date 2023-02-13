<?php
session_start();
date_default_timezone_set('Asia/Singapore');

if (isset($_SESSION["login"])){
    header("Location: admin/index.php");
    exit;
}
require 'koneksi.php';
if (isset($_POST["login"]))
    {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_terakhir = date('Y-m-d H:i:s');

    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            $_SESSION["peran"] = $row["peran"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["id"] = $row["id_user"];
            if ($row["peran"] == "ADMIN"){
                $update = mysqli_query($conn, "UPDATE pengguna SET login_terakhir = '$login_terakhir' WHERE username = '$username'");
                header("location: admin/index.php");
            } else if($row["peran"] == "USER"){
                $update = mysqli_query($conn, "UPDATE pengguna SET login_terakhir = '$login_terakhir' WHERE username = '$username'");
                header("location: user/index.php");
            }
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1">
    <title>LOGIN | STAFF KPID KALSEL</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="shortcut icon" href="dist/img/user.png">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>KPID</b> Kalsel</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Masukkan Username dan Password Anda</p>
                <?php if(isset($error)){ ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    Username dan Password Salah...!
                </div>
                <?php } ?>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username.."
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="login">Masuk</button>
                            <!-- <a href="" class="btn btn-danger btn-block">Buat Akun</a> -->
                        </div>
                    </div>
                </form>
                <p class="mt-3">
                    <a href="#">Lupa Password?</a>
                </p>
            </div>
        </div>
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../dist/js/adminlte.min.js"></script>
        
</body>

</html>