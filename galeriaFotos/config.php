<?php
try{
    $pdo= new PDO("mysql:dbname=projeto_galeriadefotos;host=localhost","root","");
}catch(PDOException $e){
    echo "erro".$e->getMessage();
}
?>