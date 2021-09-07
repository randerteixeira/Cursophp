<?php
$dsn="mysql:dbname=newdatabase;host=localhost";
$dbuser="root";
$dbpassword="";
try{
    $pdo=new PDO($dsn,$dbuser,$dbpassword);
$nome="nicole helena machado inacio";
$email="grupo_das_banguelas@fire.com.br";
$senha=md5(121314);
$sql="INSERT INTO usuarios SET nome='$nome',email='$email',senha='$senha'" ;
$sql=$pdo->query($sql);
echo"usuario inserido=".$pdo->lastInsertId();


}catch(PDOException $e){
echo "flahou".$e->getMessage();
}