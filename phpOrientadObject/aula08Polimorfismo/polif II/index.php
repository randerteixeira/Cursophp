<?php



class Animal
{
    public function getNome()
    {
        echo "getNoome da classe Animal";
    }
}
class Cachorro extends Animal
{
 public function getNome()
 {
     echo "getNome da classe Cachorro";
 }
    
}
$animal = new Cachorro();
$animal->getNome();
