<?php
session_start();
require "config.php";
if (isset($_POST['agencia']) && !empty($_POST['agencia'])) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);
    $sql = $pdo->prepare("SELECT *FROM contas WHERE agencia=:agencia AND conta=:conta AND senha=:senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if ($sql->rowCount()>0){
       $sql=$sql->fetch();
       $_SESSION['banco']=$sql['id'];
       header("location:index.php");
    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form method="post">
        agencia: <br>
        <input type="text" name="agencia" id=""><br><br>
        conta: <br>
        <input type="text" name="conta"><br><br>
        senha: <br>
        <input type="password" name="senha" id=""><br><br>
        <input type="submit" value="entrar">
    </form>
    <br><br><br>
    <p>Você e do adiministrativo ?</p>
    <a href="login_adm.php"><button> entre por aqui </button></a>
</body>

</html>