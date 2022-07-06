<?php
class Pemasok
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
        $sql = "SELECT * FROM pemasok";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO pemasok (nama,alamat,no_telp) VALUES (?,?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getPemasok($id)
    {
        $sql = "SELECT * FROM pemasok WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($data)
    {
        $sql = "UPDATE pemasok SET  nama=?, alamat=?, no_telp=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data)
    {
        $sql = "DELETE FROM pemasok WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
