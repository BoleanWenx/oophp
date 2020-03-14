<?php

class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    // Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $jmlHalaman = 0, $waktuMain
    = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoLengkap()
    {

        // Komik : Naruto | Muhammad riansyah, Asean Icn (300000) - 100 halaman

        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .= "~ {$this->waktuMain} Jam.";
        }

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
$produk1 = new Produk("Naruto", "Muhammad riansyah", "Asean Icn", 300000, 100, 0, "Komik");
$produk2 = new Produk("GTA", "TISA", "Andrean", 301102, 0, 50, "Game");



echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
