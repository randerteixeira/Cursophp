<?php
session_start();
require 'config.php';
$arquivo=$_FILES['arquivo'];
$nomeArquivo=md5(time()).'.png';
if (isset($arquivo['tmp_name'])&&empty($arquivo['tmp_name'])==false){
    move_uploaded_file($arquivo['tmp_name'],'media/imgaleria'.$nomeArquivo);
    $id=$_SESSION['id'];
    $nomeArquivo='media/imgaleria'.$nomeArquivo;
    $sql=("INSERT INTO img SET imgname='$nomeArquivo', data=NOW(), iduser='$id'");
    $pdo->query($sql);

$_SESSION['uploadok']="<p style='color:green;'>enviado com sucesso!!!";
header('location:index.php');
} else{
    $_SESSION['uploadok']="<p style='color:red;'>algo deu errado";
    header('location:index.php');
}



?>