<?php
// primeira aula como criar um objeto


class Post{//<----------classe de post
/**propriedades da  classe*/public $likes=50;//<-------atributos da classe
/**propriedades da  classe*/public $coments=[];//<-------atributos da classe
/**propriedades da  classe*/public $author;//<-------atributos da classe

}

$post1 = new Post();//<--------------objeto


echo "post1 ".$post1->likes;
 


?>