<?php
    $username = "root";
    $server =  "localhost";
    $pw = "";

    $conn = new mysqli($username, $server, $pw);

    if($conn){
        echo "sambungan gagal";
    } else echo "sambungan berhasil";

?>