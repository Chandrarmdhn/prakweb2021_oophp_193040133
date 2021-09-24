<?php 
// define ('NAMA', 'Chandra Dwi Ramadhani');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// 
// echo __LINE__; //menampilkan baris
// echo __FILE__; //menampilkan alamat file

// function Coba() {
//     return __FUNCTION__;
//     echo Coba();
// }

class Coba
{
  public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
?>