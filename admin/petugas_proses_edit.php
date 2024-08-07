<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_petugas = $_POST["id_petugas"];
$nama_petugas = $_POST["nama_petugas"];
$no_telepon = $_POST["no_telepon"]; 
$id_wilayah = $_POST["id_wilayah"]; 

if($edit = mysqli_query($konek, "UPDATE petugas SET nama_petugas='$nama_petugas', no_telepon='$no_telepon', id_wilayah='$id_wilayah'
                        WHERE id_petugas='$id_petugas'")){
 
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
                                window.location.replace('petugas');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
