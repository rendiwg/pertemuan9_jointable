<?php

$servername = "localhost";
$database = "rendiw_311810570";
$username = "root";
$password = "";



$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	die("Koneksi gagal: " . mysqli_connect_error());
}

?>