<?php
include "../koneksi.php";
include "alert/loadalert.php";

$id_pengiriman = $_POST["id_pengiriman"];
$id_bantuan = $_POST["id_bantuan"]; 
$jumlah = $_POST["jumlah"];
$tanggal_transaksi = $_POST["tanggal_transaksi"];


if ($add = mysqli_query($konek, "INSERT INTO transaksi (id_pengiriman, id_bantuan, jumlah, tanggal_transaksi) VALUES 
        ('$id_pengiriman', '$id_bantuan', '$jumlah', '$tanggal_transaksi' )")){
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
                                window.location.replace('transaksi');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>