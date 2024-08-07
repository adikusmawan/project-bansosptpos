<?php 
 
$konek = mysqli_connect("localhost","root","","bansosptpos");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>