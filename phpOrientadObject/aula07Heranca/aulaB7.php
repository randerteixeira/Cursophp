<?php

use Post as GlobalPost;

class Post
{
    private int $id;
    private int $likes = 0;
    public function setId($i)
    {
        $this->id = $i;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setLikes($i)
    {
        $this->likes = $i;
    }

    public function getLikes()
    {
        return $this->likes;
    }
}
class Foto extends Post
{
    private $url;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }


    public function getUrl()
    {
        return $this->url;
    }
}
class Decri extends Post{
    private $text;
 public function __construct($id)
 {
     $this->id=$id;
 }
  
    public function setText($text){
        $this->text=$text;
    }
    public function getText(){
        return $this->text;
    }



}

$foto = new Foto(20);
$foto->setLikes(10);
$foto->setUrl('www.besteira.com/jpg');
$fotoDecr=new Decri(20);
$fotoDecr->setText('loren inpisson e o caralho eu sou muito artista para criar meus proprios textos kkkkk');

echo "foto" . $foto->getId() . " likes" . $foto->getLikes() . " url:" . $foto->getUrl()." <br>descricao:".$fotoDecr->getText();
echo "<br><br><br>";

$fotoII = new Foto(25);
$fotoII->setLikes(100);
$fotoII->setUrl('www.cocoGigante.com');

$fotoDecrII=new Decri(25);
$fotoDecrII->setText('nem sei oque estou fazendo kkk quando eu saber fica bom ');
echo "foto" . $fotoII->getId() . " likes" . $fotoII->getLikes() . " url:" . $fotoII->getUrl()."<br> descricao".$fotoDecrII->getText();
