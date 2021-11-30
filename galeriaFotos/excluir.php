<?php
session_start();
$poder=$_SESSION['poder'];
$img=$_GET['img'];
$id=addslashes($_GET['id']);


if(!empty($poder)&& $poder==='3'){
require 'config.php';

$sql=("DELETE FROM img WHERE id ='$id'");
$sql=$pdo->query($sql);
unlink($img);
$_SESSION['uploadok']="<p style='color:green;'>deletado com sucesso</p>";
header("location:index.php");

}
else{
    $_SESSION['uploadok']="<p style='color:red;'>voce nao tem permissao para deletar algo !</p>";
    header("location:index.php");
}?>