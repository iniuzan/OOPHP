<?php 
//jualan produk
//Komik
//Game


class produk{
    public $judul = "Judul Buku",
            $penulis = "Penulisnya",
            $penerbit = "Penerbitnya",
            $harga = 0;

    public function getLabel(){
        return "$this->judul , $this->penulis";
    }
}

// $produk1 = new produk();
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "tenggelamnya kapal Titanic";
// $produk2->penerbit = "Majalah Bobo";
// var_dump($produk2);


$produk3 = new produk();
$produk3->judul = "pembelajaran jarak jauh";
$produk3->penulis = "Penulisnya";
$produk3->penerbit = "Penerbitnya";
$produk3->harga = 100000;

echo "Komik: $produk3->judul, ditulis oleh $produk3->penulis ";
echo "diterbitkan oleh $produk3->penerbit seharga $produk3->harga";
echo $produk3->getLabel();

echo"<hr><br><br><br><br>";

$produk4 = new produk();
$produk4->judul = "Klebus";
$produk4->penulis = "Guyon Waton";
$produk4->penerbit = "Aftershine";
$produk4->harga = 200000;

echo "Lagu : ".$produk4->getLabel();
?>