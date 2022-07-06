<?php
require_once 'koneksi_db.php';
require_once 'models/Produk.php';
//1. tangkap request dari form
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$tombol = $_POST['proses']; //tangkap tombol
//2. masukkan ke data array
$data = [
    $nama_produk, // ? 1
    $harga  // ? 2
];
//3. ciptakan object dari class produk
$obj = new Produk();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        var_dump($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx']; // ? ke 4 where id = ? yg didapat dari hidden field form edit
        $obj->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $data[] = $_POST['idx']; // ? ke 4 where id = ? yg didapat dari hidden field form edit
        $obj->hapus($data);
        break;
    default: # code...break;
        header('location:index.php?hal=produk');
}
//4. landing page
header('location:index.php?hal=produk');
