<?php

require_once 'App/init.php';

// Object
// $produk1 = new Komik("Naruto", "Muhammad riansyah", "Asean Icn", 30000, 100);
// $produk2 = new Game("GTA", "TISA", "Andrean", 301102, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
// echo "<hr>";


// pada saat Pendeklarasian Class nya khusus NAMESPACE
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;


new ServiceUser();
echo "<br>";
new ProdukUser();
