<?php
include 'contato.class.php';
$email=$_GET['email'];
$contato = new Contato();
$contato->deletar($email);
header('location:index.php');