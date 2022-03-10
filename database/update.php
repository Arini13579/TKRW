<?php

$Nama   = $_POST['nama'];
$Id     = $_POST['id'];
$Alamat = $_POST['alamat'];
$NoHp   = $_POST['nohp'];

include 'koneksi.php';
$sql = "INSERT INTO dosen VALUES ('$Nama', '$Id', '$Alamat', '$NoHp')";

mysqli_query($koneksi,"update dosen set nama='$Nama', id='$Id', alamat='$Alamat', nohp='NoHp'");

?>