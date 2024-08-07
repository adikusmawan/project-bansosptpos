<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_pengiriman = $_GET["id_pengiriman"];

if($delete = mysqli_query ($konek, "DELETE FROM pengiriman WHERE id_pengiriman='$id_pengiriman'")){
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
                                window.location.replace('pengiriman');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>