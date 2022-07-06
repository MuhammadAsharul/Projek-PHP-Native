<?php
require_once 'koneksi_db.php';
require_once 'models/Pemasok.php';
//1. tangkap request dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tombol = $_POST['proses']; //tangkap tombol
//2. masukkan ke data array
$data = [
    $nama, // ? 1
    $alamat,  // ? 2
    $no_telp  // ? 3
];
//3. ciptakan object dari class pemasok
$obj = new Pemasok();
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
        header('location:index.php?hal=pemasok');
}
//4. landing page
header('location:index.php?hal=pemasok');
