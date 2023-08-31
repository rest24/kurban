<?php include 'template/header.php';
include 'aksi/koneksi.php';

// Memeriksa apakah parameter id telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk mengambil data belanja berdasarkan ID
    $query = "SELECT * FROM belanja WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Memeriksa apakah data dengan ID yang diberikan ditemukan
    if (!$row) {
        echo "Data tidak ditemukan";
        exit;
    }
} else {
    echo "ID tidak ditemukan";
    exit;
}

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai input dari form
    $namaPembeli = $_POST['namaPembeli'];
    $alamatPengirim = $_POST['alamatPengirim'];
    $noHp = $_POST['noHp'];
    
    // Query untuk mengupdate data belanja
    $query = "UPDATE belanja SET nama_pembeli = '$namaPembeli', alamat_pengiriman = '$alamatPengirim', no_hp = '$noHp' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    // Memeriksa apakah update berhasil
    if ($result) {
        echo "Data berhasil diupdate";
        header("location:view.php");
    } else {
        echo "Terjadi kesalahan saat mengupdate data";
    }
}

?>

<br>
<div class="container">
    <h2>Edit Data Belanja</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="namaPembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" name="namaPembeli" id="namaPembeli" value="<?php echo $row['nama_pembeli']; ?>">
        </div>
        <div class="mb-3">
            <label for="alamatPengirim" class="form-label">Alamat Pengiriman</label>
            <input type="text" class="form-control" name="alamatPengirim" id="alamatPengirim" value="<?php echo $row['alamat_pengiriman']; ?>">
        </div>
        <div class="mb-3">
            <label for="noHp" class="form-label">No Handphone/WhatsApp</label>
            <input type="text" class="form-control" name="noHp" id="noHp" value="<?php echo $row['no_hp']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="view.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<br>

<?php include "template/footer.php"; ?>
