<?php
require_once 'koneksi_db.php';
require_once 'models/Detail_Beli.php';
//1. tangkap request dari form
$jml_beli = $_POST['jml_beli'];
$hrg_beli = $_POST['hrg_beli'];
$produk_id = $_POST['produk_id'];
$pembelian_id = $_POST['pembelian_id'];
//2. simpan ke database
$tombol = $_POST['proses'];
//2. masukkan ke data array
$data = [
    $jml_beli, // ? 1
    $hrg_beli,  // ? 2
    $produk_id, // ? 3
    $pembelian_id // ? 4
];
//3. ciptakan object dari class KategoriRuangan
$obj = new Detail_Beli();
//logik untuk tombol
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx']; // ? ke 4 where id = ? yg didapat dari hidden field form edit
        $obj->ubah($data);
        break;
    case 'hapus':
        unset($data); //hapus 2 ? di array $data
        $data[] = $_POST['idx']; // ? ke 1 where id = ? yg didapat dari hidden field        
        $obj->hapus($data);
        break;
    default:
        header('location:index.php?hal=detail_pembelian');
}
//4. landing page
header('location:index.php?hal=detail_pembelian');
