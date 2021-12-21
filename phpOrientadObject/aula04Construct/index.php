<?php



class Post{
    public $likes;
    public $coments=[];
    public $author;
// metodo construtor 
    public function __construct($qtLikes){
        $this->likes=$qtLikes;
    }
    
    public function aumentarLike(){
        $this->likes++;
    }

}
$post1 =new Post(25);
echo "post1 ".$post1->likes;