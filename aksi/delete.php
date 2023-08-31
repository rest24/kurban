<?php
include 'koneksi.php';

// Memeriksa apakah parameter id ada
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan id
    $query = "DELETE FROM belanja WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika penghapusan berhasil, redirect ke halaman view.php
        header('Location:../view.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan";
}
?>
