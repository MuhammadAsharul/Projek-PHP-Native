<?php
class Detail_Beli
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
        $sql = "SELECT * FROM detail_beli 
        inner join produk on detail_beli.produk_id=produk.id
        inner join pembelian on detail_beli.pembelian_id=pembelian.id ";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getDetail($id)
    {
        $sql = "SELECT * FROM detail_beli WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO detail_beli (jml_beli,hrg_beli,produk_id,pembelian_id) VALUES (?,?,?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE detail_beli SET jml_beli=?, hrg_beli=?, produk_id =?, pembelian_id=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM detail_beli WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
