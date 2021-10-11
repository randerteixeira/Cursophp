<?php
try{
    $pdo= new PDO("mysql:dbname=projeto_cadastro;host=localhost","root","");
}catch(PDOException $e){
    echo "erro".$e->getMessage();
}
?>