<?php
session_start();
if ($_SESSION["peran"] == "USER") {
    header("Location: recover-password.php");
    exit;
}

include '../koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pulihkan Kata Sandi | KPID Kalsel</title>
    <link rel="shortcut icon" href="../dist/img/user.png">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="admin/index.php"><b>Admin KPID Kalimantan Selatan</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">
            Anda hanya selangkah lebih maju dari kata sandi baru Anda, pulihkan
            kata sandi sekarang.
          </p>

          <form action="index.php" method="post">
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="Confirm Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">
                  Ubah Kata Sandi
                </button>
              </div>
            </div>
          </form>

          <p class="mt-3 mb-1">
            <a href="index.php">Login</a>
          </p>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
  </body>
</html>