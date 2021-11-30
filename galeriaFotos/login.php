<?php
session_start();
require 'config.php';
if(isset($_POST['user'])&&!empty($_POST['password'])){
$nome=addslashes($_POST['user']);
$senha=md5(addslashes($_POST['password']));
$sql="SELECT *FROM users WHERE nome='$nome'AND senha='$senha'";
$sql=$pdo->query($sql);
if ($sql->rowCount()>0){
$sql=$sql->fetch();
    $_SESSION['id']=$sql['id'];
    header('location:index.php');

}
else{
    echo"nao achamos";
}
}else{
    echo"faca login";
}
?>
<form action="" method="post">
    nome:
    <input type="text" name="user" id="">
    <br><br>
    senha:
    <input type="password" name="password" id="">
    <br><br>
    <input type="submit" value="enviar">
</form>