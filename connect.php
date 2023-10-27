<?php
    $username = "root";
    $server =  "localhost";
    $pw = "";

    $conn = mysqli_connect($server,$server, $pw);

    if(!$conn){
        echo "sambungan gagal";
    } else echo "sambungan berhasil";

?>