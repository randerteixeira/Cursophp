<?php
require 'config.php';
$id=0;
if(isset($_GET['id'])&&empty($_GET['id']==false)){
    $id=addslashes($_GET['id']);
}

if (isset($_POST['nome'])&&empty($_POST['nome']==false)){
    $nome = addslashes($_POST['nome']);
    $email= addslashes($_POST['email']);
    $sql ="UPDATE  usuarios SET nome='$nome',email='$email' WHERE id_user='$id'";
    $sql=$pdo->query($sql);
    header("location:index.php");
}

$sql="SELECT *FROM usuarios WHERE id_user='$id'";
$sql=$pdo->query($sql);
if ($sql->rowCount()>0){
    $dado=$sql->fetch();
}else{
    header("location:index.php");
}   



?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        Nome:<br>
            <input type="text" name="nome" value="<?php echo $dado['nome'] ?>"><br>
        E-mail:<br>
            <input type="email" name="email" value="<?php echo $dado['email']?>" ><br>

        Senha:<br>
            <input type="password" name="senha"><br><br>

        <input type="submit" value="atualizar">

    </form>
    
</body>
</html>