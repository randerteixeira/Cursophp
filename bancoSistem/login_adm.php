<?php
session_start();
require 'config.php';
if(isset($_POST['nome'])&&!empty($_POST['nome'])){
$nome=addslashes($_POST['nome']);    
$cpf=addslashes($_POST['cpf']);    
$senha=addslashes($_POST['senha']);
$sql = $pdo->prepare("SELECT *FROM administrativo WHERE nome_adm=:nome AND cpf=:cpf AND senha=:senha");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":cpf", $cpf);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();
    if($sql->rowCount()>0){
        $sql=$sql->fetch();
  $_SESSION['adm']=$sql['id'];
  header("location:administrativo.php");
        exit;
    }
    else{
        echo"erro no banco de dados";
    }
}else{
    echo"erro";
}



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
    <form  method="post">
        nome: <br>
        <input type="text" name="nome" id=""><br><br>
        cpf: <br>
        <input type="number" name="cpf" id="">
        senha: <br>
        <input type="password" name="senha" id=""><br><br>
        <input type="submit" value="entrar">

    </form>
</body>
</html>