<?php
class Pembelian
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
        $sql = "SELECT * FROM pembelian";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO pembelian (tanggal,pemasok_id) VALUES (?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getPembelian($id)
    {
        $sql = "SELECT * FROM pembelian INNER JOIN pemasok ON pembelian.pemasok_id=pemasok.id WHERE pembelian.id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($data)
    {
        $sql = "UPDATE pembelian SET tanggal=?, pemasok_id=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data)
    {
        $sql = "DELETE FROM pembelian WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
