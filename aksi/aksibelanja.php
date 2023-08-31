<?php
include 'koneksi.php'; // Mengimpor file koneksi.php

// Memeriksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil nilai dari formulir belanja
    $namaPembeli = $_POST['namaPembeli'];
    $alamatPengirim = $_POST['alamatPengirim'];
    $noHp = $_POST['noHp'];
    $jenisHewan = $_POST['jenisHewan'];
    $diskon = $_POST['Diskon'];

    // Mengambil harga berdasarkan jenis hewan
    if ($jenisHewan == 'sapi') {
        $harga = 20000000;
    } elseif ($jenisHewan == 'kambing') {
        $harga = 3000000;
    } elseif ($jenisHewan == 'unta') {
        $harga = 40000000;
    }

    // Mengambil nilai diskon berdasarkan pilihan diskon
    if ($diskon == 'sapi5' || $diskon == 'kambing5' || $diskon == 'unta5') {
        $diskonPersen = 0.05;
    } elseif ($diskon == 'sapi7' || $diskon == 'kambing7' || $diskon == 'unta7') {
        $diskonPersen = 0.07;
    } else {
        $diskonPersen = 0;
    }

    // Menghitung total harga setelah diskon
    $totalHarga = $harga - ($harga * $diskonPersen);

    // Menyimpan data ke database
    $sql = "INSERT INTO belanja (nama_pembeli, alamat_pengiriman, no_hp, jenis_hewan, diskon, total_harga) VALUES ('$namaPembeli', '$alamatPengirim', '$noHp', '$jenisHewan', '$diskon', $totalHarga)";

    if ($conn->query($sql) === TRUE) {
        echo "Data belanja berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Menutup koneksi database
    $conn->close();
}

header("location:../view.php");
?>
