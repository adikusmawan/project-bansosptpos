<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_bantuan = $_POST["id_bantuan"];
$nama_bantuan = $_POST["nama_bantuan"];
$deskripsi = $_POST["deskripsi"]; 

if($edit = mysqli_query($konek, "UPDATE jenis_bantuan SET nama_bantuan='$nama_bantuan', deskripsi='$deskripsi'
                        WHERE id_bantuan='$id_bantuan'")){
 
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
                                window.location.replace('jenis_bantuan');
                                } ,1900); 
                        </script>
    ";
    exit();
}

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
