<?php
$servername = "localhost"; // Nama server database
$username = "root"; // Username database
$password = ""; // Password database
$dbname = "belanja_kurban"; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur karakter set untuk koneksi
$conn->set_charset("utf8");
?>
