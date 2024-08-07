<?php
include "../koneksi.php";
include "alert/loadalert.php";

$nama_wilayah = $_POST["nama_wilayah"];
$keterangan = $_POST["keterangan"]; 


if ($add = mysqli_query($konek, "INSERT INTO wilayah (nama_wilayah, keterangan ) VALUES 
        ('$nama_wilayah', '$keterangan' )")){
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
                                window.location.replace('wilayah');
                                } ,1900); 
                        </script>
        ";
        exit();
                                        }

die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>