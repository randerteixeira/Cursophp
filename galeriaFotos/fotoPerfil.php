<?php
session_start();
require 'config.php';
$id=addslashes($_SESSION['id']);
$nomeArquivo=md5(time()).'.png';
$arquivo=$_FILES['arquivo'];


if(isset($arquivo['tmp_name'])&&!empty($arquivo['tmp_name'])){
    

    move_uploaded_file($arquivo['tmp_name'],'assets/img_style'.$nomeArquivo);
    
    $nomeArquivo='assets/img_style'.$nomeArquivo;
    $sql=("UPDATE users SET fotoperfil='$nomeArquivo' WHERE id='$id'");
    $pdo->query($sql);
    header("location:index.php");

}
?>
<form action="" method="post"  enctype="multipart/form-data" >
    <input type="file" name="arquivo"id="">;
    <input type="submit" value="alterar">;
</form>