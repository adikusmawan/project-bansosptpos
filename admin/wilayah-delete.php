<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_wilayah = $_GET["id_wilayah"];

if($delete = mysqli_query ($konek, "DELETE FROM wilayah WHERE id_wilayah='$id_wilayah'")){
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
                                window.location.replace('wilayah');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>