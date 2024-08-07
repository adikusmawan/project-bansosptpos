<?php

include "../koneksi.php";
include "alert/loadalert.php";

$id_transaksi = $_GET["id_transaksi"];

if($delete = mysqli_query ($konek, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'")){
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
                                window.location.replace('transaksi');
                                } ,1900); 
                        </script>
	";
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>