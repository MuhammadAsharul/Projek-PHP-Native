<?php
class Produk
{
    //member1 var
    public $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; //panggil instance obj PDO di koneksi_db.php
        $this->koneksi = $dbh; // instance obj PDO di assign ke var koneksi   
    }
    //member3 method2 terkait CRUD
    public function getAll()
    {
        $sql = "SELECT * FROM produk";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getProduk($id)
    {
        $sql = "SELECT * FROM produk WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO produk (nama_produk,harga) VALUES (?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE produk SET nama_produk=?, harga=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM produk WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
