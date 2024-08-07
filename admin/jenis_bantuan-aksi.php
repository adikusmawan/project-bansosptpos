<?php
include "../koneksi.php";
include "alert/loadalert.php";

$nama_bantuan = $_POST["nama_bantuan"];
$deskripsi = $_POST["deskripsi"]; 


if ($add = mysqli_query($konek, "INSERT INTO jenis_bantuan (nama_bantuan, deskripsi ) VALUES 
        ('$nama_bantuan', '$deskripsi' )")){
        echo " 
        <script>
                                setTimeout(function () {  
                                swal({
                                title: 'Sukses',
                                text:  'Data Berhasil Di Simpan!!',
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

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>