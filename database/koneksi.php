<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mhs";

    //membuat koneksi 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //mengecek apakah koneksi berhasil
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else{
    echo "Koneksi Berhasil";
    }

?>