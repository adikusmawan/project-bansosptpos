<?php

include "../koneksi.php";
include "alert/loadalert.php";

$nama_pengguna                       = $_POST["nama_pengguna"];
$username                       = $_POST["username"];
$password                       = $_POST["password"]; 
$role                       = $_POST["role"]; 

if($add = mysqli_query($konek, "INSERT INTO pengguna (nama_pengguna, username, password, role) VALUES 
    ('$nama_pengguna', '$username', '$password', '$role')")){
        echo " 
    <script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Tambah',
                                type: 'success',
                                timer: 1500,
                                showConfirmButton: true
                                });  
                                },50); 
                                window.setTimeout(function(){ 
                                window.location.replace('pengguna');
                                } ,1900); 
                        </script>
    ";
        exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>