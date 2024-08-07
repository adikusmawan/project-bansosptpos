<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_penerima = $_POST["id_penerima"];
$nama_penerima = $_POST["nama_penerima"];
$alamat = $_POST["alamat"];
$no_telepon = $_POST["no_telepon"];
$id_wilayah = $_POST["id_wilayah"]; 
$tanggal_daftar_penerima = $_POST["tanggal_daftar_penerima"];

if($edit = mysqli_query($konek, "UPDATE daftar_penerima SET nama_penerima='$nama_penerima', alamat='$alamat', no_telepon='$no_telepon', id_wilayah='$id_wilayah'
    , tanggal_daftar_penerima='$tanggal_daftar_penerima'
                        WHERE id_penerima='$id_penerima'")){
 
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
                                window.location.replace('daftar_penerima');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
