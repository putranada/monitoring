        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="../assets/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">KPID KALSEL</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/ya.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION["username"]; ?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Program
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="program_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Program TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="program_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Program Radio</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="data_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Radio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data_pelanggaran_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pelanggaran TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data_pelanggaran_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pelanggaran Radio</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    P3SPS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="p3sps.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pedoman Pelanggaran TV dan Radio</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Monitoring
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="monitoring_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Monitoring TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="monitoring_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Monitoring Radio</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="laporan_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Stasiun TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Stasiun Radio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_pelanggaran_ptv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Pelanggaran Program TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_pelanggaran_pradio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Pelanggaran Program Radio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_pelanggaran_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Pelanggaran TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_pelanggaran_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Pelanggaran Radio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_monitoring_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Monitoring TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="laporan_monitoring_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Monitoring Radio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="statistik_tv.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Statistik Berdasarkan Jenis Pelanggaran TV</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="statistik_radio.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Statistik Berdasarkan Jenis Pelanggaran Radio</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>