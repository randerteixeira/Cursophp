<?php
$dsn="mysql:dbname=newdatabase;localhost";
$dbuser="root";
$dbpassword="";

try{
$pdo= new PDO($dsn,$dbuser,$dbpassword);
$sql="DELETE FROM usuarios WHERE id_user=6 ;";
$pdo->query($sql);

echo "cliente deletado com sucesso!";

}catch(PDOException $e){
echo"Sistem Failed:".$e->getMessage();

}