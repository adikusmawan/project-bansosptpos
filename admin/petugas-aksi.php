<?php
include "../koneksi.php";
include "alert/loadalert.php";

$nama_petugas = $_POST["nama_petugas"];
$no_telepon = $_POST["no_telepon"];
$id_wilayah = $_POST["id_wilayah"]; 


if ($add = mysqli_query($konek, "INSERT INTO petugas (nama_petugas, no_telepon, id_wilayah) VALUES 
        ('$nama_petugas', '$no_telepon', '$id_wilayah' )")){
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
                                window.location.replace('petugas');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>