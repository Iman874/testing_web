<?php
$server_name = "localhost";
$pengguna = "root";
$password = "";

// Membuat koneksi antara php dan mySQL
$cek_koneksi = mysqli_connect($server_name, $pengguna, $password);

// Memeriksa koneksi
if (!$cek_koneksi) {
  die("Gagal terhubung ke database: " . mysqli_connect_error());
}

// Pilih database yang akan digunakan
$database_name = "testing";
if (mysqli_select_db($cek_koneksi, $database_name)) {
  echo "Database sudah ada!";
} else {
  // Membuat database
  $create_database = "CREATE DATABASE $database_name";
  if (mysqli_query($cek_koneksi, $create_database)) {
    echo "Database telah dibuat!";
  } else {
    echo "Proses gagal! Gagal membuat database! " . mysqli_error($cek_koneksi);
  }
}

// Tutup koneksi
mysqli_close($cek_koneksi);
?>
