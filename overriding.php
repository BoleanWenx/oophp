<?php

class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk()
    {
        // Komik : Naruto | Muhammad riansyah, Asean Icn (300000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . "(Rp. {$this->harga})- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . "(Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}
// Object
$produk1 = new Komik("Naruto", "Muhammad riansyah", "Asean Icn", 300000, 100);
$produk2 = new Game("GTA", "TISA", "Andrean", 301102, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
