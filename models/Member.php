<?php
class Member
{
    //member1 var
    public $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; //panggil instance obj PDO di koneksi_db.php
        $this->koneksi = $dbh; // instance obj PDO di assign ke var koneksi   
    }
    //member3 method2
    public function cekLogin($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(?))";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}
