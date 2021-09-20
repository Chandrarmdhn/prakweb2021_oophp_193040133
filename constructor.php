<?php 
 //jualan produk
 //komik
 //game

 class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga; 
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
 }

//  $produk1 = new Produk();
//  $produk1->judul = "Naruto";
//  var_dump($produk1);

//  $produk2 = new Produk();
//  $produk2->judul = "Uncharted";
//  $produk2->tambahProperty = "Naruto";
//  var_dump($produk2);

$produk1 = new Produk("Naruto", "Masachi kishimoto", "Shonen jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk("Game");

echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

?>