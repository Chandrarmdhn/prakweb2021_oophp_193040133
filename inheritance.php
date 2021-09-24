<?php 
 //jualan produk
 //komik
 //game

 class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga, 
           $jmlHalaman,
           $waktuMain;  
      
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, 
        $jmlHalaman = 0, $waktuMain = 0 ){
        
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
      $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
      return $str;
    }
 }

class Komik extends Produk {
  public function getInfoProduk(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - 
          {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public function getInfoProduk(){
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ 
          {$this->waktuMain} Jam.";
    return $str;
  }
}


class CetakInfoProduk {
  public function cetak( Produk $produk ){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



//  $produk1 = new Produk();
//  $produk1->judul = "Naruto";
//  var_dump($produk1);

//  $produk2 = new Produk();
//  $produk2->judul = "Uncharted";
//  $produk2->tambahProperty = "Naruto";
//  var_dump($produk2);

$produk1 = new Komik("Naruto", "Masachi kishimoto", "Shonen jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>