<?php
try{
    $pdo=new PDO("mysql:dbname=projeto_trasition_json;host=localhost", "root", "");
}catch(PDOException $e){
    echo"erro".$e->getMessage();
}
$sql=('SELECT * FROM userJson');
$sql= $pdo->query($sql);
if($sql->rowCount()>0){
   $dados=array( $sql->fetchAll());
  print_r($dados);
}

foreach($dados as $newdados){
    echo$newdados['nome'].'<br>'.$newdados['id'];
}
/*
$fh = fopen("newJson.json", 'w');
fwrite($fh, json_encode($newdados));
fclose($fh);
echo"ok !";
*/