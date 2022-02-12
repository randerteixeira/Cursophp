<?php
include 'contato.class.php';

$contato = new Contato();

if (!empty($_GET['email'])&&!empty($_GET['nome'])) {
    $email = $_GET['email'];
    $nome = $_GET['nome'];
    $contato->editar($nome, $email);
    header('location:index.php');
}
?>
