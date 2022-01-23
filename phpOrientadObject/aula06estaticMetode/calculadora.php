<?php
class Calculadora {
    public float $number=0;

 public function add($x){
     $this->number+=$x;
}
public function sub($x){
    $this->number-=$x;
}
public function multiply($x){
    $this->number*=$x;
}
public function divide($x){
      $this->number/=$x;
}
public function total(){
   return $this->number;
}



}