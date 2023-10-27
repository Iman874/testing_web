<?php
$server_name = "localhost";
$pengguna = "root";
$password = "";
$data_base = "testing";
$conn = new mysqli ($server_name, $pengguna, $password, $data_base);

//mengecek apakah koneksi dengan mySQL berhasil atau tidak
if (!$conn){
	die("koneksi gagal ".mysqli_connect_error());
}
?>