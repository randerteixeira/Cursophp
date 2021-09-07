<?php
$dsn="mysql:dbname=newdatabase;localhost";
$dbuser="root";
$dbpassword="";

try{
$pdo=new PDO($dsn,$dbuser,$dbpassword);
$sql="UPDATE usuarios SET email='turmadasbanguelas@firebol.com.br' WHERE id_user='5'; ";
$sql=$pdo->query($sql);
echo "alterado com sucesso";

}catch(PDOException $e){
echo"Sistem Failed:".$e->getMessage();

}