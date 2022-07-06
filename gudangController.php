<?php
require_once 'koneksi_db.php';
require_once 'models/Gudang.php';
//1. tangkap request dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tombol = $_POST['proses'];
//2. masukkan ke data array
$data = [
    $nama, // ? 1
    $alamat  // ? 2
];
//3. ciptakan object dari class KategoriRuangan
$obj = new Gudang();
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
        header('location:index.php?hal=gudang');
}
//4. landing page
header('location:index.php?hal=gudang');
