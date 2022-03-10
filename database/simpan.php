<?php

$Nama   = $_POST['nama'];
$Id     = $_POST['id'];
$Alamat = $_POST['alamat'];
$NoHp   = $_POST['nohp'];

include 'koneksi.php';
$sql = "INSERT INTO dosen VALUES ('$Nama', '$Id', '$Alamat', '$NoHp')";

if (mysqli_query($conn, $sql)){
    echo "data berhasil";
    echo "<br>";
    echo "<a href='/tugas/input.php'>isi lagi</a>";

}else {
    echo "error:" . $sql . "<br>" . mysqli_error($conn);
}

?>