<?php
require 'contato.class.php';
if(!empty($_GET['nome'])&&!empty($_GET['email'])){
    $email=$_GET['email'];
    $nome=$_GET['nome'];

    $contato=new Contato();
    $contato->adicionar($email,$nome);
    header('location:index.php');
}?>

<h1>adicionar</h1>
<form action="" method="get">
    <input type="text" name="nome" id="">
    <input type="text" name="email" id="">
    <input type="submit" value="adicionar">
    


</form>
