<?php
$dsn="mysql:dbname=newdatabase;localhost";
$dbuser="root";
$dbpassword="";

try{
$pdo=new PDO($dsn,$dbuser,$dbpassword);
$nome="mariana rafael machado teixeira";
$id =2;
$sql="UPDATE usuarios SET nome=:novonome WHERE id_user=:id";
$sql=$pdo->prepare($sql);
$sql-> bindValue(':novonome',$nome);
$sql->bindValue(':id',$id);
$sql->execute();


echo "alterado com sucesso";

}catch(PDOException $e){
echo"Sistem Failed:".$e->getMessage();

}