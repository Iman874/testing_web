<?php
$server_name = "localhost";
$pengguna = "root";
$password = "";

// Membuat koneksi antara php dan mySQL
$cek_koneksi = mysqli_connect($server_name, $pengguna, $password);

// Memeriksa koneksi
if (!$cek_koneksi) {
  echo "Gagal terhubung ke database: ";
}
// Membuat database
$create_database = "CREATE DATABASE testing";// db_webplot adalah nama database
if (mysqli_query($cek_koneksi, $create_database)) {
  echo "Database telah dibuat!";
}
else {
  echo "Proses gagal! gagal membuat database! " . mysqli_error($cek_koneksi);
}
?>