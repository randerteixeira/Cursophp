<?php
try{
$pdo= new PDO("mysql:dbname=projeto_calculadora;host=localhost","root","");
}catch(PDOException $e){
    echo"error".$e->getMessage();
    exit;
}
$sql="DELETE FROM historico";
$sql=$pdo->query($sql);
header("location:index.php");
?>