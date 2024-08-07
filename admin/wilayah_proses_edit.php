<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_wilayah = $_POST["id_wilayah"];
$nama_wilayah = $_POST["nama_wilayah"];
$keterangan = $_POST["keterangan"]; 

if($edit = mysqli_query($konek, "UPDATE wilayah SET nama_wilayah='$nama_wilayah', keterangan='$keterangan'
                        WHERE id_wilayah='$id_wilayah'")){
 
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
                                window.location.replace('wilayah');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
