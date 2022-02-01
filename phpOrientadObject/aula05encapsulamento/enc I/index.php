<?php


class Post
{
    public int $id;
    public int $like = 0;
    public array $coment = [];
    public string $autor;

    public function aumentarLikes()
    {
        $this->like++;
    }
    public function setAuthor($n)
    {
        $this->autor = ucfirst($n);
    }
    public function getAuthor()
    {
        return $this->autor;
    }
}
$post1=new Post('void');
$post1->setAuthor('rander gabriel Teixeira');

$post2=new Post('void');
$post2->setAuthor('mariana');
echo "post1".$post1->like ."<br>  Autor:".$post1->autor;
echo "post1".$post2->like ."<br> Autor:".$post2->autor;
