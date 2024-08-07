<?php
include "../koneksi.php";
include "alert/loadalert.php";

$nama_penerima = $_POST["nama_penerima"];
$alamat = $_POST["alamat"];
$no_telepon = $_POST["no_telepon"];
$id_wilayah = $_POST["id_wilayah"]; 
$tanggal_daftar_penerima = $_POST["tanggal_daftar_penerima"];


if ($add = mysqli_query($konek, "INSERT INTO daftar_penerima (nama_penerima, alamat, no_telepon, id_wilayah, tanggal_daftar_penerima) VALUES 
        ('$nama_penerima', '$alamat', '$no_telepon', '$id_wilayah', '$tanggal_daftar_penerima')")){
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
                                window.location.replace('daftar_penerima');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>