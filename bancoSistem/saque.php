<?php
session_start();
require 'config.php';
if(isset($_SESSION['banco'])&&!empty($_SESSION['banco'])){
    $id=addslashes($_SESSION['banco']);
    $valor_saque=addslashes($_POST['valor']);
    $op=1;
    $data_op=date('d/m/Y H:i:s',time());
    $sql=$pdo->prepare("INSERT INTO historico SET id_conta=:id,tipo=:op,valor=:valor,data_operacao=NOW()");
    $sql->bindValue(':id',$id);
    $sql->bindValue(':op',$op);
    $sql->bindValue(':valor',$valor_saque);
    
    $sql->execute();
   header("location:index.php");
}



?>