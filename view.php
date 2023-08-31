<?php include 'template/header.php'; ?>
<?php
include 'aksi/koneksi.php';

// Query untuk mengambil data dari tabel belanja
$query = "SELECT * FROM belanja";
$result = mysqli_query($conn, $query);

?>
<br>
<div class="container">
    <h2>Data Belanja</h2>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nama Pembeli</th>
            <th>Alamat Pengiriman</th>
            <th>No Handphone/WhatsApp</th>
            <th>Jenis Hewan</th>
            <th>Diskon</th>
            <th>Total Harga</th>
            <th>Tanggal Belanja</th>
            <th>Aksi</th> <!-- Kolom Delete -->
        </tr>
        <?php
        // Loop through each row from the query result
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama_pembeli']."</td>";
            echo "<td>".$row['alamat_pengiriman']."</td>";
            echo "<td>".$row['no_hp']."</td>";
            echo "<td>".$row['jenis_hewan']."</td>";
            echo "<td>".$row['diskon']."</td>";
            echo "<td>".$row['total_harga']."</td>";
            echo "<td>".$row['tanggal_pembelian']."</td>";
            echo "<td><a href='aksi/delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>"; // Tombol Delete
            echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
<br>

<?php include "template/footer.php"; ?>
