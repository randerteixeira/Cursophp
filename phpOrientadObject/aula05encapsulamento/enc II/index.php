<?php


class Post{
 private $titulo;
 private $autor;
 private $pagina;

public function getTitulo(){
return $this->titulo;
}
public function setTitulo($t){
 if(is_string($t)&& strlen($t)>10){
 $this->titulo="<h1>".$t."</h1>";


 }else{
     $this->titulo="<h1>Ops!! titulo deve ser um texto</h1>";
 }


}

}
$post=new Post('void');
$post->setTitulo('aaaaaaaaaaa');
echo $post->getTitulo(); 
    






