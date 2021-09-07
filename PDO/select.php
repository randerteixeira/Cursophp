<?php
$dsn="mysql:dbname=newdatabase;host=localhost";
$dbuser="root";
$dbpassword="";
try{
$pdo= new PDO($dsn,$dbuser,$dbpassword);
$sql="SELECT * FROM usuarios";

$sql=$pdo->query($sql);

if($sql->rowCount()>0){
    foreach($sql->fetchAll() as $user){
        echo"id".$user["id_user"]."<br>"."nome:".$user["nome"]."<br>"."email:".$user["email"]."<br><br>";
            }
        }

        else{

            echo"nao a post";
}
}catch(PDOException $e){
echo "flahou".$e->getMessage();
}
?>