<?php 
//jualan produk
//Komik
//Game

use produk as GlobalProduk;

class produk{
    public $judul = "Judul Buku",
            $penulis = "Penulisnya",
            $penerbit = "Penerbitnya",
            $harga = 0;
    
    public function __construct($judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = "Harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new produk("Wayang Panggung", "dasep sutarja","Informatika",45000);
$produk2 = new produk("Euro Truck Simulator 2", "SCS Software","Steam",210000);
$produk3 = new produk("Dragon ball");


echo "Buku : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";
var_dump($produk3)

?>