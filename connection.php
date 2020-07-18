co<?php
$server   = "localhost";
$username = "id14365992_covid";
$password = "Rudi21011992.";
$database = "id14365992_root";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>