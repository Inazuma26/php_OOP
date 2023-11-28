<?php

class Produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

//Kegunaan Dari Variable $this untuk : mengambil isi dari property yang ada di dalam class yang bersangkutan
    public function Getlable(){
        return "$this->judul,$this->penulis";
    }

}
$produk1 = new Produk();
$produk1->judul =  "Naruto";
$produk1->penulis =  "Masahi Kisimoto";
$produk1->penerbit =  "Saunen Jump";
$produk1->harga =  30000;
echo "Komik : ". $produk1->Getlable();