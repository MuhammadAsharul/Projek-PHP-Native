<?php
session_start();
require_once 'koneksi_db.php';
require_once 'models/Member.php';
//1. tangkap request dari form
$user = $_POST['username'];
$pass = $_POST['password'];
//2. masukkan ke data array
$data = [
    $user, // ? 1
    $pass  // ? 2
];
//3. ciptakan object dari class Fasilitas
$obj = new Member();
$rs = $obj->cekLogin($data);
if (!empty($rs)) {
    $_SESSION['MEMBER'] = $rs;
    header('location:index.php?hal=home');
} else {
    header('location:index.php?hal=gagal_login');
}
