<?php
// Periksa apakah sesi sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cek apakah pengguna sudah login
if (!isset($_SESSION['Login']) || $_SESSION['Login'] !== true) {
    header("Location: ../index.php");
    exit();
}

// Simpan role pengguna ke dalam variabel
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
?>
    
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index">SIBAN</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>

                     

 <!-- MENU -->         
                <li>
                    <a href="index"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>                        
                </li>
                <?php if ($role === 'admin'): ?>

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-folder"></span> <span class="xn-text">Master Data</span></a>
                    <ul>                        

                        <li>
                            <a href="pengguna"><span class="fa fa-caret-right"></span> Data Pengguna</a>
                        </li>
                        <li>
                            <a href="wilayah"><span class="fa fa-caret-right"></span> Data Wilayah</a>
                        </li>
                     
                        <li>
                            <a href="petugas"><span class="fa fa-caret-right"></span> Data Petugas</a>
                        </li>

                        <li>
                            <a href="daftar_penerima"><span class="fa fa-caret-right"></span> Data Daftar Penerima</a>
                        </li>
                 
                        <li>
                            <a href="jenis_bantuan"><span class="fa fa-caret-right"></span> Data Jenis Bantuan</a>
                        </li>
                         
                    </ul>
                </li>

                <?php endif; ?>

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-paper-plane"></span> <span class="xn-text">Penerimaan</span></a>
                    <ul>
                        <li>
                            <a href="pengiriman"><span class="fa fa-caret-right"></span> Penerimaan</a>
                        </li>
                    </ul>
                </li>

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Rekapan</span></a>
                    <ul>
                        <li>
                            <a href="transaksi"><span class="fa fa-caret-right"></span> Data Rekapan</a>
                        </li>
                    </ul>
                </li>

                <li class="xn-openable">
                    <a href="tables.html"><span class="fa fa-print"></span> <span class="xn-text">Laporan</span></a>
                    <ul>
                        <li>
                            <a href="lap_daftar_penerima"><span class="fa fa-caret-right"></span> Lap. Daftar Penerima</a>
                        </li>
                        <li>
                            <a href="lap_pengiriman"><span class="fa fa-caret-right"></span> Lap. Penerimaan</a>
                        </li>
                        <li>
                            <a href="lap_transaksi"><span class="fa fa-caret-right"></span> Lap. Rekapan</a>
                        </li>                                    
                                         
                                        
                </ul>
                <!-- END X-NAVIGATION -->
             
            