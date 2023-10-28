<?php
    require ('connect.php');

    $table_name = "tabel_tes"; // Nama tabel yang ingin diekspor
    $filename = "export_testing.sql"; // Nama file .sql yang akan dihasilkan

    // Mengambil data dari tabel "tabel_tes"
    $sql = "SELECT * FROM " . $table_name;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = "-- Ekspor data dari tabel '$table_name' di database 'testing'\n";
        $data .= "-- Tanggal: " . date('Y-m-d H:i:s') . "\n\n";

        while ($row = $result->fetch_assoc()) {
            $sql_insert = "INSERT INTO $table_name (";

            // Membuat daftar kolom
            $columns = array_keys($row);
            $sql_insert .= implode(', ', $columns) . ") VALUES (";

            // Membuat nilai
            $values = array_map(function ($value) use ($conn) {
                return "'" . $conn->real_escape_string($value) . "'";
            }, $row);
            $sql_insert .= implode(', ', $values) . ");\n";

            $data .= $sql_insert;
        }

        // Simpan data dalam file .sql
        file_put_contents($filename, $data);

        echo "Data dari tabel '$table_name' telah diekspor ke $filename.";
    } else {
        echo "Tidak ada data yang ditemukan dalam tabel '$table_name'.";
    }

    // Tutup koneksi
    $conn->close();

?>