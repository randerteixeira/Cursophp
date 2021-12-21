<?php

/**
 * nesse assunto de typed propiets  ele ira tipar cada propiedade ou seja vc podera
 * escolher que tipo de dado ira entrar en cada propriedade 
 * com isso vc proteje sua aplicacao de possiveis erros 
 */
class Post2{
public int $likes=50;//int so ira receber numeros inteiros 
public  array$coments=[];// so ira receber arrays
public string $author;// so ira receber strings ......

public function aumentarLike(){
    $this->likes++;
}

}

$post1 = new Post2();
$post1->aumentarLike();

echo "post1 ".$post1->likes;
 


?>
