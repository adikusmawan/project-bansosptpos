<?php

include "../koneksi.php";
include "alert/loadalert.php";
$id_pengguna = $_GET["id_pengguna"];

if($delete = mysqli_query ($konek, "DELETE FROM pengguna WHERE id_pengguna='$id_pengguna'")){
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
                                window.location.replace('pengguna');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>