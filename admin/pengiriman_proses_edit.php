<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_pengiriman = $_POST["id_pengiriman"];
$id_penerima = $_POST["id_penerima"];
$id_petugas = $_POST["id_petugas"]; 
$tanggal_pengiriman = $_POST["tanggal_pengiriman"];
$id_status = $_POST["id_status"];

if($edit = mysqli_query($konek, "UPDATE pengiriman SET id_penerima='$id_penerima', id_petugas='$id_petugas', tanggal_pengiriman='$tanggal_pengiriman', 
                        id_status='$id_status'
                        WHERE id_pengiriman='$id_pengiriman'")){
 
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
                                window.location.replace('pengiriman');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
