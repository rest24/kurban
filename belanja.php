<?php include 'template/header.php'; ?>
<br>
<div class="container">
    <div class="card-header">
        <h3><center>Belanja Kurban</center></h3>
    </div>
    <form action="aksi/aksibelanja.php" method="post">
        <div class="mb-3">
            <label for="namaPembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" name="namaPembeli" id="namaPembeli">
        </div>
        <div class="mb-3">
            <label for="alamatPengirim" class="form-label">Alamat Pengiriman</label>
            <input type="text" class="form-control" name="alamatPengirim" id="alamatPengirim">
        </div>
        <div class="mb-3">
            <label for="noHp" class="form-label">No Handphone/WhatsApp</label>
            <input type="text" class="form-control" name="noHp" id="noHp">
        </div>
        <div class="mb-3">
    <label for="jenisHewan" class="form-label">Jenis Hewan</label>
    <select class="form-select" name="jenisHewan" id="jenisHewan">
        <option value="sapi">Sapi (Rp 20.000.000)</option>
        <option value="kambing">Kambing (Rp 3.000.000)</option>
        <option value="unta">Unta (Rp 40.000.000)</option>
    </select>
        <div class="mb-3">
    <label for="Diskon" class="form-label">Pilih Diskon</label>
    <select class="form-select" name="Diskon" id="Diskon">
        <option value="sapi5">SAPIKECE5 (Diskon 5%)</option>
        <option value="kambing5">KAMBINGKECE5 (Diskon 5%)</option>
        <option value="unta5">UNTAKECE5 (Diskon 5%)</option>
        <option value="sapi7">SAPIKEREN7 (Diskon 7%)</option>
        <option value="kambing7">KAMBINGKEREN7 (Diskon 7%)</option>
        <option value="unta7">UNTAKEREN7 (Diskon 7%)</option>
    </select>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
</div>
<br>
<?php include "template/footer.php"; ?>
