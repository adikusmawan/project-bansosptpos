<?php 
 
$konek = mysqli_connect("localhost","root","","user=postgres.lmddghsviijdfgeiiqsd password=host=aws-0-ap-southeast-1.pooler.supabase.com port=6543 dbname=postgres");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
