# Web pembelian Hewan Kurban

Web Kurban Kece

## Badges

<img src="https://img.shields.io/badge/figma-%23F24E1E.svg?style=for-the-badge&logo=figma&logoColor=white">

## Deskripsi

Web ini digunakan untuk **dapat memberikan DISKON**

> Memiliki CRUD

> Fitur sebagai Admin

> Terhubung dengan database

## Requirement

1. Xamp PHP > v.7
2. Database MySQL
3. Bahasa pemograman PHP
4. Browser Versi terbaru
5. Text Editor versi terbaru

## Instalation

```php
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

```

## Struktur Folder

```
📦Tugas_Besar
 ┣ 📂aksi
 ┃ ┣ 📜aksibelanja.php
 ┃ ┣ 📜delete.php
 ┃ ┗ 📜koneksi.php
 ┣ 📂img
 ┃ ┣ 📜kambing1.jpg
 ┃ ┣ 📜kambing2.jpg
 ┃ ┣ 📜sapi.jpg
 ┃ ┣ 📜sapi1.jpg
 ┃ ┣ 📜sapi2.jpg
 ┃ ┣ 📜unta1.jpg
 ┃ ┗ 📜unta2.jpg
 ┣ 📂template
 ┃ ┣ 📜footer.php
 ┃ ┗ 📜header.php
 ┣ 📜belanja.php
 ┣ 📜daftaHarga.php
 ┣ 📜edit.php
 ┣ 📜index.php
 ┣ 📜readme.md
 ┣ 📜view.php
 ┗ 📜voucher.php
 ```

### Credits

> versi 1.0 unstable

> Create by Developer: Restu Andryana Suhendar
