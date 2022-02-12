<?php
class Recebedor{
 public $nome;

 public function __construct()
 {
     $this->nome=$_GET['nome'];
 }


}
$recebedor=new Recebedor();
echo $recebedor->nome;
?>