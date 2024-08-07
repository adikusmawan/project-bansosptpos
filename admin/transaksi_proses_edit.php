<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_transaksi = $_POST["id_transaksi"];
$id_pengiriman = $_POST["id_pengiriman"];
$id_bantuan = $_POST["id_bantuan"]; 
$jumlah = $_POST["jumlah"];
$tanggal_transaksi = $_POST["tanggal_transaksi"];

if($edit = mysqli_query($konek, "UPDATE transaksi SET id_pengiriman='$id_pengiriman', id_bantuan='$id_bantuan', jumlah='$jumlah', 
                        tanggal_transaksi='$tanggal_transaksi'
                        WHERE id_transaksi='$id_transaksi'")){
 
    echo " 
    <script>
                                setTimeout(function () {
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Edit',
                                type: 'success',
                                timer: 1500,
                                showConfirmButton: true
                                });  
                                },50); 
                                window.setTimeout(function(){ 
                                window.location.replace('transaksi');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
