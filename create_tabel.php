<?php
    $server_name = "localhost";
    $pengguna = "root";
    $password = "";
    $database = "testing";
    $cek_koneksi = new mysqli ($server_name, $pengguna, $password,$database);
    
    //mengecek koneksi
    if (!$cek_koneksi){
        die("Gagal menghubungkan ke database! ".mysqli_connect_error());
    }
    

    // Membuat tabel "table_tes"
    $sql_create_table = "CREATE TABLE IF NOT EXISTS table_tes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        tes varchar(1000)
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

?>