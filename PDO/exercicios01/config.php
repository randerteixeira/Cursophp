<?php
$dsn="mysql:dbname=newdatabase;host=localhost";
$dbuser="root";
$dbpassword="";
 try {
    $pdo=new PDO($dsn,$dbuser,$dbpassword);

 } catch (PDOException $e) {
    echo"ou nao aconteceu algum problema".$e->getMessage();
 }