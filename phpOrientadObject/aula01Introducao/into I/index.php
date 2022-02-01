<?php
// primeira aula como criar um objeto


class Post5{//<----------classe nome POST
/**propriedades da  classe*/public $likes=0;//<-------atributos da classe
/**propriedades da  classe*/public $coments=[];//<-------atributos da classe
/**propriedades da  classe*/public $author;//<-------atributos da classe

}

$post1 = new Post5();//<--------------objeto1
$post1->likes=3;
 
$post2 = new Post5();//<--------------objeto2
$post2->likes=4;

$post3= new Post5();//<---------------objeto3
$post3->likes=3;

$totalLikes=$post1->likes+$post2->likes+$post3->likes;


echo $totalLikes;

//O total de likes serao 10 



 


?>