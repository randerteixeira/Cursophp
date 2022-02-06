<?php


class Post
{
    private $titulo;
    private $autor;
    private $pagina;

    public function __construct($t)
    {
        $this->setTitulo($t);
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($t)
    {

        if (is_string($t) && strlen($t) > 10) {
            $this->titulo = "<h1>" . $t . "</h1>";
        }
    }
}
$post = new Post('hekkkkkkkvvvvvvvvvvvv');

echo $post->getTitulo();
