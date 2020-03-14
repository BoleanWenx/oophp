<?php

class Produk
{
    // property
    public $judul = "judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga;

    // method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->harga = "15 k";
// var_dump($produk2);

// OBJECT
$produk3 = new Produk();
$produk3->judul = "One piece";
$produk3->penulis = "Muhammad riansyah";

$produk4 = new Produk();
$produk4->judul = "GTA San Andreas";
$produk4->penulis = "Neil";
$produk4->penerbit = "Asean inc";
$produk4->harga = 190000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
