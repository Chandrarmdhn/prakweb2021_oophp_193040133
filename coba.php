<?php 
  class Coba {
    public $a; //property

    //method
    public function b(){

    }
  }

  &a = new Coba();
  &b = new Coba();
  &c = new Coba();

  var_dump($a);
  var_dump($b);
  var_dump($c);

  

?>