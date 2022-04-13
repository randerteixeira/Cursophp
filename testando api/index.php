<?php
try{
    $pdo=new PDO("mysql:dbname=projeto_trasition_json;host=localhost", "root", "");
}catch(PDOException $e){
    echo"erro".$e->getMessage();
}

$sql=('SELECT * FROM userJson');

$sql= $pdo->query($sql);

if($sql->rowCount()>0){
    /**Array
(
    [0] => Array
        (
            [id] => 1
            [0] => 1
            [nome] => rander
            [1] => rander
            [sobrenome] => teixeira
            [2] => teixeira
            [sexo] => 1
            [3] => 1
        )

    [1] => Array
        (
            [id] => 2
            [0] => 2
            [nome] => mariana
            [1] => mariana
            [sobrenome] => teixeira
            [2] => teixeira
            [sexo] => 2
            [3] => 2
        )

    [2] => Array
        (
            [id] => 3
            [0] => 3
            [nome] => nicole
            [1] => nicole
            [sobrenome] => alvarenga
            [2] => alvarenga
            [sexo] => 2
            [3] => 2
        )

    [3] => Array
        (
            [id] => 4
            [0] => 4
            [nome] => ana eliza
            [1] => ana eliza
            [sobrenome] => machado
            [2] => machado
            [sexo] => 2
            [3] => 2
        )

    [4] => Array
        (
            [id] => 5
            [0] => 5
            [nome] => jorcivn
            [1] => jorcivn
            [sobrenome] => jorcivan
            [2] => jorcivan
            [sexo] => 2
            [3] => 2
        )

)  */
    
    
    


  $x=0;      

foreach($sql->fetchAll() as $newdados){
$newArray[$x]=array('id'=>$newdados['id'],'nome'=>$newdados['nome'],'sobrenome'=>$newdados['sobrenome'],'sexo'=>$newdados['sexo']);
$x++;

}
}
$testearray=array("pizzaJson"=>[$newArray]);
echo"<pre>";
print_r($newArray);
$fh = fopen("newJson.js", 'w');
fwrite($fh,"let pizzaJson=". json_encode($newArray));
fclose($fh);
echo"ok !";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="apre">
      
    </div>
   <script src="newJson.js"></script>
   <script src="script.js"></script> 
</body>
</html>