<?php
$dsn="mysql:dbname=newdatabase;localhost";
$dbuser="root";
$dbpassword="";

try{
$pdo=new PDO($dsn,$dbuser,$dbpassword);
$sql="UPDATE usuarios SET nome='elaine batista' WHERE nome='elaine batista franca'; ";
$sql=$pdo->query($sql);
echo "alterado com sucesso";

}catch(PDOException $e){
echo"Sistem Failed:".$e->getMessage();

}