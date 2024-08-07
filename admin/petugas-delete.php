<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_petugas = $_GET["id_petugas"];

if($delete = mysqli_query ($konek, "DELETE FROM petugas WHERE id_petugas='$id_petugas'")){
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
                                window.location.replace('petugas');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>