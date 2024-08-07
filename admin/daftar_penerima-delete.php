<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_penerima = $_GET["id_penerima"];

if($delete = mysqli_query ($konek, "DELETE FROM daftar_penerima WHERE id_penerima='$id_penerima'")){
	echo " 
	<script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Hapus!!',
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
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>