<?php



class Post4{
//private $likes=50;//private para dar privacidade a seu atributo ou seja o usuario nao tera acesso a ela 
//protected $coments=[];//protected vc deixa a sua prpriedade protegida ou seja tambem sem aces//so pelo usuario
//public $author;//vc deixa a essa propriedade publica o usuario estara fazendo alteracoes dire//tam//ente a ela 
/**ao tentar acessar essa propriedade o codigo ira dar esse erro .
 * Fatal error: Uncaught Error: Cannot access private property Post::$likes in C:\xampp
 * \htdocs\Cursophp\phpOrientadObject\aula2Propriedades\index.php:16 Stack trace: #0 {main} 
 * thrown in C:\xampp\htdocs\Cursophp\phpOrientadObject\aula2Propriedades\index.php on line 16
 */

public $likes=0;
public $coments=[];
public $author;




// metodo//
public function aumentarLike(){
 $this->likes++;//toda vez que esse methodo for chamado ele ira icrementar +1 a likes
}

}

$post1 = new Post4();
//aqui vai chamar o metodo almentar like e vai incrementar +1 like a like 1



//por exemplo toda vez que for chamado ele ira icrementar a post 1 mais um like 

while($post1->likes<100){
    $post1->aumentarLike();
}// nesse caso sera chamdo 100 vezes pelo laco


$post2 = new Post4();
while($post2->likes<1000){
    $post2->aumentarLike();
}//nesse mil vezes ou seja o quanto me der vontade 

echo "post1 ".$post1->likes;
echo"<br>";
echo "post2 ".$post2->likes; 


?>