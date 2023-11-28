<?php

class Produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

// Constraktor method adalah : metode khusus yang akan di jalankan secara otomatis setiap kita membuat instant dari sebuah class
    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

//Kegunaan Dari Variable $this untuk : mengambil isi dari property yang ada di dalam class yang bersangkutan
    public function Getlable(){
        return "$this->judul";
    }

}
$produk1 = new Produk("Naruto","Massahi Kissimoto", "Saunen Jump", 30000);
echo "Komik : ". $produk1->Getlable();