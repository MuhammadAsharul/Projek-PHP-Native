<?php
class Gudang
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
        $sql = "SELECT * FROM gudang";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getGudang($id)
    {
        $sql = "SELECT * FROM gudang WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO gudang (nama,alamat) VALUES (?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE gudang SET nama=?, alamat=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM gudang WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
