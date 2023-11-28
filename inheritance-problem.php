<?php

class Produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalaman;
    public $waktuMain;
    public $tipe;

// Constraktor method adalah : metode khusus yang akan di jalankan secara otomatis setiap kita membuat instant dari sebuah class
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $waktuMain=0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

//Kegunaan Dari Variable $this untuk : mengambil isi dari property yang ada di dalam class yang bersangkutan
    public function Getlable(){
        return "$this->judul,$this->penerbit";
    }

    public function GetInfoLengkap(){
        $str = "{$this->tipe} : {$this->jidul} | {$this->Getlable} (Rp.{$this->harga})";
        if($this->tipe == "Komik"){
            $str .= "- {$this->jmlHalaman}.Halaman";
        }else if($this->tipe == "Game"){
            $str .= " ~ {$this->wakruMain}.Game";
        }
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->Getlable()},  (Rp.{$produk->harga})";
        return $str;
    }
}





$produk1 = new Produk("Naruto","Massahi Kissimoto", "Saunen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharthed", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->GetInfoLengkap();