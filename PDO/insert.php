<?php
$dsn="mysql:dbname=newdatabase;host=localhost";
$dbuser="root";
$dbpassword="";
try{
    $pdo=new PDO($dsn,$dbuser,$dbpassword);
$nome="elaine batista franca ";
$email="elainebatista@ofcialmail.com";
$senha=md5("010796rander");
$sql="INSERT INTO usuarios SET nome='$nome',email='$email',senha='$senha'" ;
$sql=$pdo->query($sql);
echo"usuario inserido=".$pdo->lastInsertId();


}catch(PDOException $e){
echo "flahou".$e->getMessage();
}