<?php
include "../koneksi.php";
include "alert/loadalert.php";

$id_penerima = $_POST["id_penerima"];
$id_petugas = $_POST["id_petugas"]; 
$tanggal_pengiriman = $_POST["tanggal_pengiriman"];
$id_status = $_POST["id_status"];


if ($add = mysqli_query($konek, "INSERT INTO pengiriman (id_penerima, id_petugas, tanggal_pengiriman, id_status) VALUES 
        ('$id_penerima', '$id_petugas', '$tanggal_pengiriman', '$id_status' )")){
        echo " 
        <script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Simpan!!',
                                type: 'success',
                                timer: 1900,
                                showConfirmButton: true
                                });  
                                },90); 
                                window.setTimeout(function(){ 
                                window.location.replace('pengiriman');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>