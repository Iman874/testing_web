<?php
    include ('connect.php');
// Membuat database "testing"
$sql_create_database = "CREATE DATABASE IF NOT EXISTS testing";
if ($conn->query($sql_create_database) === TRUE) {
    echo "Database 'testing' berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error dalam pembuatan database: " . $conn->error;
}

// Menggunakan database "testing"
$conn->select_db("testing");

// Membuat tabel "table_tes"
$sql_create_table = "CREATE TABLE IF NOT EXISTS table_tes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tes TEXT
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabel 'table_tes' berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error dalam pembuatan tabel: " . $conn->error;
}

// Memasukkan data ke dalam tabel
$sql_insert_data = "INSERT INTO table_tes (tes) VALUES ('ini adalah tulisan di dalam database')";
if ($conn->query($sql_insert_data) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam tabel.<br>";
} else {
    echo "Error dalam memasukkan data: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
