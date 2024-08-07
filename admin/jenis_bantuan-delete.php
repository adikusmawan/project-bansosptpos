<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_bantuan = $_GET["id_bantuan"];

if($delete = mysqli_query ($konek, "DELETE FROM jenis_bantuan WHERE id_bantuan='$id_bantuan'")){
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
                                window.location.replace('jenis_bantuan');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>