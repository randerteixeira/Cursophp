<?php
require 'config.php';
?>
<?php
if(isset($_POST['nome'])&&empty($_POST['nome']==false)){
$name=addslashes($_POST['nome']);
$email=addslashes($_POST['email']);
$pass=md5(addslashes($_POST['senha']));
$sql="INSERT INTO usuarios SET nome='$name',email='$email',senha='$senha'";
$pdo->query($sql);
header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adicionar cliente</title>
</head>
<body>
    <form method="POST">
        Nome:<br>
            <input type="text" name="nome"><br>
        E-mail:<br>
            <input type="email" name="email" ><br>

        Senha:<br>
            <input type="password" name="senha"><br><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>