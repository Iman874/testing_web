<?php
    require ('connect.php');
    
    // Mengambil data dari tabel "table_tes"
    $sql_select_data = "SELECT * FROM table_tes";
    $result = $conn->query($sql_select_data);

    if ($result->num_rows > 0) {
        // Menampilkan data
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Tes: " . $row["tes"] . "<br>";
        }
    } else {
        echo "Tidak ada data dalam tabel 'table_tes'.";
    }

    // Menutup koneksi
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO PHP</h1>
    <h2>INI MERUPAKAN PERUBAHAN DARI AKUN KEDUA!!!</h2>
    <h2>INI perubahan dari akun ketiga!!</h2>
    <h2>sdfsdfsaf</h2>
</body>
</html>