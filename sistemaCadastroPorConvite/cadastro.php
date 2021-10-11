<?php
session_start();
require 'conexao.php';
if (!empty($_GET['codigo'])) {
    $codigo = addslashes($_GET['codigo']);
    $sql = "SELECT *FROM usuarios WHERE codigo='$codigo'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() == 0) {
        header("location:login.php");
        exit;
    }
} else {
    header("location:login.php");
}
if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $codigo = md5(rand(0, 9999)) . md5(rand(0, 999));
    $sql = "INSERT INTO usuarios (email,senha,codigo) VALUES ('$email','$senha','$codigo')";
    $sql = $pdo->query($sql);
    unset($_SESSION['logado']);
    header("location:login.php");
}


?>
<h3>Cadastrar</h3>

<form method="POST">
    E-mail:<br />
    <input type="email" name="email" /><br /><br />

    Senha:<br />
    <input type="password" name="senha" /><br /><br />

    <input type="submit" value="Cadastrar" />
</form>