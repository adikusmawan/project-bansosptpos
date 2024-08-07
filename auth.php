<?php
session_start();
include "koneksi.php"; // Pastikan file koneksi.php sudah ada dan terhubung ke database

// Tangkap data dari form login
$username = $_POST["username"];
$password = $_POST["password"];

// Periksa apakah username dan password diisi
if (!empty($username) && !empty($password)) {
    // Query untuk mengambil data pengguna berdasarkan username dan password
    $query = mysqli_query($konek, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");

    // Ambil data pengguna
    $pengguna = mysqli_fetch_array($query);
    
    // Periksa apakah data pengguna ditemukan
    if ($pengguna) {
        // Set session untuk pengguna yang berhasil login
        $_SESSION["id_pengguna"] = $pengguna["id_pengguna"];
        $_SESSION["nama_pengguna"] = $pengguna["nama_pengguna"];
        $_SESSION["username"] = $pengguna["username"];
        $_SESSION["role"] = $pengguna["role"];
        $_SESSION["Login"] = true;

        // Redirect berdasarkan role pengguna
        if ($pengguna["role"] == "admin") {
            header("Location: admin/index");
        } else if ($pengguna["role"] == "petugas") {
            header("Location: admin/index");
        } else {
            // Jika role tidak dikenali, redirect ke halaman error
            header("Location: error.php");
        }
        exit();
    } else {
        // Jika username atau password salah, redirect ke halaman login dengan pesan error
        header("Location: index?Err=1");
        exit();
    }
} else {
    // Jika username atau password kosong, redirect ke halaman login dengan pesan error
    header("Location: index?Err=2");
    exit();
}
?>
