<?php

class Produk
{
    // Property
    public $judul,
        $penulis ,
        $penerbit,
        $harga ;

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
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

// Object
$produk1 = new Produk("Naruto", "Muhammad riansyah", "Asean Icn", 300000);
$produk2 = new Produk("GTA", "TISA", "Andrean", 301102);
$produk3 = new Produk("Dragon Ball");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Komik : ". $produk3->getLabel();
