<?php
include "../vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4',]);

ob_start();
    ?>
    <?php 
echo " 
       <style type='text/css'>
       .main-wrapper a {
            text-decoration: none;
            color: #3586b7;
        }
        .main-wrapper a.text-link:hover {
            border-bottom: 1px dashed #CCCCCC;
        }
        .tutorial-link-wrapper {
            text-align: center;
        }
        header {
            padding: 10px 30px 7px 30px;
            border-bottom: 2px solid #636b71;
            background: #343d44;
        }
        footer {   
            background: #343d44;
            padding: 10px 0 7px 30px;
            color: #b9bfc3;
            font-size: 10px;
        }
        footer a {
            color: #b9bfc3;
            text-decoration: none;
            margin-left: 10px;
        }
        .link-header {
            margin-top: 10px;
        }
        .link-header a {
            font-size: 10px;
            color: #b9bfc3;
            text-decoration: none;
            margin: 0;
        }
        .link-header a.home:hover {
            color: #b9bfc3;
        }
        .main-wrapper {
            padding: 25px 0;
        }
        .link-header {
            float: right;
        }
        .clearfix {
            clear: both;
        }
        @media screen and (max-width: 450px) {
            header,
            footer {
                text-align: center;
            }
            .link-header {
                float: none;
                margin: 0;
            }
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 10px;
        }

        table td {
            transition: all .5s;
        }
        .table-wrapper {
            overflow: auto;
        }
        .main-wrapper {
            padding: 20px;
        }
        .main-wrapper a:hover {
            border-bottom: 1px dashed #CCCCCC;
        }
        
        /* Table */
        .demo-table {
            border-collapse: collapse;
            font-size: 10px;
            min-width: 537px;
        }

        .demo-table th, 
        .demo-table td {
            border: 0px solid #e1edff;
            padding: 5px 15px;
        }
        .demo-table caption {
            margin: 7px;
        }

        /* Table Header */
        .demo-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .demo-table tbody td {
            color: #353535;
        }
        .demo-table tbody td:first-child,
        .demo-table tbody td:nth-child(4),
        .demo-table tbody td:last-child {
            text-align: right;
        }

        .demo-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .demo-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .demo-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .demo-table tfoot th:first-child {
            text-align: left;
        }
        .demo-table tbody td:empty
        {
            background-color: #ffcccc;
        }
        
        /* Table 2 */
        .demo-table2 {
            border-collapse: collapse;
            font-size: 10px;
            min-width: 536px;
            font-family:Times New Roman;
        }

        .demo-table2 th, 
        .demo-table2 td {
            padding: 7px 17px;
            font-family:Times New Roman;
        }
        .demo-table2 caption {
            margin: 7px;
        }

        .demo-table2 thead th:last-child,
        .demo-table2 tfoot th:last-child,
        .demo-table2 tbody td:last-child {
            border: 0;
        }

        /* Table Header */
        .demo-table2 thead th {
            border-right: 1px solid #c7ecc7;
            text-transform: uppercase;
            font-family:Times New Roman
        }

        /* Table Body */
        .demo-table2 tbody td {
            color: #353535;
            border-right: 1px solid #c7ecc7;
        }
        .demo-table2 tbody tr:nth-child(odd) td {
            background-color: #f4fff7;
        }
        .demo-table2 tbody tr:nth-child(even) td {
            background-color: #dbffe5;
        }
        .demo-table2 tbody td:nth-child(4),
        .demo-table2 tbody td:first-child,
        .demo-table2 tbody td:last-child {
            text-align: right;
        }
        .demo-table2 tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .demo-table2 tfoot th {
            border-right: 1px solid #5675;
            text-align: right;
        }





            table {
                background: #fff;
                padding: 5px;
            }
             td,th {
                border: table-cell;
                border: 1px  solid #444;
            }
            th {
                font-weight: bold;
            }

            tr,td {tr,
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;

                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 58%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 2px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 100px;
                    height: 150px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 18px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                border-bottom: 2px solid #363636;
                width: 20px;
                    height: 115px;
            }

             .separator1 {
                border-bottom: 5px solid #363636;
                width: 20px;
                    height: 5px;
            }
            body { font-family: Times New Roman; font-size: 12.7px }
.pos { position: absolute; z-index: 0; left: 9px; top: 0px }
        </style>

        <html>
        <head>

        <body>
";

                
if(!empty($logo)){
                        echo '<img class="logodisp" src="kps.png'.$logo.'"/>';
                    } else {
                        echo '<div class="logodisp" id="_0:0" style="top:0">
<img name="_1301:851" src="../ptpos.png" height="1501" width="250" border="0" usemap="#Map"></div>';
                    }
                    echo '

<div class="pos" id="_378:102" style="top:80;left:305">
<span id="_24.4" style="font-weight:bold; font-family:Times New Roman; font-size:18.0px; color:#000000">
PT. POS INDONESIA</span>
</div>

<div class="separator"></div>
<div class="pos" id="_350:152" style="top:100;left:340">
<span id="_19.0" style="font-weight; font-family:Times New Roman; font-size:18.0px; color:#000000">
KOTA BEKASI</span>
</div>
 
<div class="pos" id="_350:152" style="top:120;left:345">
<span id="_19.0" style="font-weight: font-family:Times New Roman; font-size:18.0px; color:#000000">
JAWA BARAT</span>
</div>


<div class="pos" id="_186:195" style="top:145;left:270">
<span id="_16.3" style=" font-family:Times New Roman; font-size:11px; color:#000000">
Jl. Lap. Serbaguna No.7, RT.002/RW.009, Margahayu</span>
</div>

<div class="pos" id="_186:195" style="top:160;left:295">
<span id="_16.3" style=" font-family:Times New Roman; font-size:11px; color:#000000">
Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113</span>
</div>
';

echo "
                </div>
                 
                 
                 ";
                
echo "
                </div>
                 
                
                ";


include "../koneksi.php";
if(isset($_REQUEST['submit'])){

            $dari_tanggal = $_REQUEST['dari_tanggal'];
            $sampai_tanggal = $_REQUEST['sampai_tanggal'];

            if($_REQUEST['dari_tanggal'] == "" || $_REQUEST['sampai_tanggal'] == ""){
                header("Location: ./admin.php?page=asm");
                die();
            } else {

                $query = mysqli_query($konek, "SELECT * FROM pengiriman
                                                                    INNER JOIN daftar_penerima ON daftar_penerima.id_penerima = pengiriman.id_penerima
                                                                    INNER JOIN petugas ON petugas.id_petugas = pengiriman.id_petugas
                                                                    INNER JOIN status_penerimaan ON status_penerimaan.id_status = pengiriman.id_status 
                                                                    WHERE tanggal_pengiriman BETWEEN '$dari_tanggal' AND '$sampai_tanggal'");

                ?>
                <?php 
                echo '
                <h5 class="tgh" id="nama">LAPORAN DATA PENERIMAAN<br></h5><br/>';

                            $y = substr($dari_tanggal,0,4);
                            $m = substr($dari_tanggal,5,2);
                            $d = substr($dari_tanggal,8,2);
                            $y2 = substr($sampai_tanggal,0,4);
                            $m2 = substr($sampai_tanggal,5,2);
                            $d2 = substr($sampai_tanggal,8,2);

                            if($m == "01"){
                                $nm = "Januari";
                            } elseif($m == "02"){
                                $nm = "Februari";
                            } elseif($m == "03"){
                                $nm = "Maret";
                            } elseif($m == "04"){
                                $nm = "April";
                            } elseif($m == "05"){
                                $nm = "Mei";
                            } elseif($m == "06"){
                                $nm = "Juni";
                            } elseif($m == "07"){
                                $nm = "Juli";
                            } elseif($m == "08"){
                                $nm = "Agustus";
                            } elseif($m == "09"){
                                $nm = "September";
                            } elseif($m == "10"){
                                $nm = "Oktober";
                            } elseif($m == "11"){
                                $nm = "November";
                            } elseif($m == "12"){
                                $nm = "Desember";
                            }

                            if($m2 == "01"){
                                $nm2 = "Januari";
                            } elseif($m2 == "02"){
                                $nm2 = "Februari";
                            } elseif($m2 == "03"){
                                $nm2 = "Maret";
                            } elseif($m2 == "04"){
                                $nm2 = "April";
                            } elseif($m2 == "05"){
                                $nm2 = "Mei";
                            } elseif($m2 == "06"){
                                $nm2 = "Juni";
                            } elseif($m2 == "07"){
                                $nm2 = "Juli";
                            } elseif($m2 == "08"){
                                $nm2 = "Agustus";
                            } elseif($m2 == "09"){
                                $nm2 = "September";
                            } elseif($m2 == "10"){
                                $nm2 = "Oktober";
                            } elseif($m2 == "11"){
                                $nm2 = "November";
                            } elseif($m2 == "12"){
                                $nm2 = "Desember";
                            }
                            echo '
                            
                            <p class="tgh"><span class="alamat"> Laporan Data Daftar Pengiriman dari Tanggal <strong>'.$d." ".$nm." ".$y.'</strong> sampai dengan tanggal <strong>'.$d2." ".$nm2." ".$y2.'</strong></span></p>
                            
                            <br/>

                            
                    <div class="card-body">
            <div class="table-wrapper">
                <table class="demo-table" width="100%" cellspacing="0" >
                    <thead class="thead-light">
                            
                                            <tr>
                                                <th width="70">No</th> 
                                                <th>id_pengiriman</th>
                                                <th>penerima</th>
                                                <th>petugas</th>  
                                                <th>tanggal_pengiriman</th>
                                                <th>status</th>   
                                            </tr>

</thead>
                    <tbody>
                           
                                ';

                            if(mysqli_num_rows($query) > 0){
                                $no = 0;
                                while($row = mysqli_fetch_array($query)){
                                    $no++;
                                 echo '
                                 <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$row['id_pengiriman'].'</td>
                                        <td>'.$row['nama_penerima'].'</td> 
                                        <td>'.$row['nama_petugas'].'</td> 
                                        <td>'.$row['tanggal_pengiriman'].'</td> 
                                        <td>'.$row['status'].'</td>  
                                </tr> 
                            ';
                                }
                            } else {
                                echo '<tr><td colspan="6"><center><p class="add">Tidak ada data</p></center></td></tr>';
                            } echo '
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
';
            }
        } else {
                             
 
}  
?>
<?php 

//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML($html);
$mpdf->Output('penerimaan' ,'I');

?>