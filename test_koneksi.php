<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sekolahku";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi) {
    echo "Koneksi berhasil!";
} else {
    echo "Koneksi gagal: " . mysqli_connect_error();
}
?>
