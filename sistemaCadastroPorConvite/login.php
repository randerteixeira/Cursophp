<?php
session_start();
require 'conexao.php';
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
$sql="SELECT *FROM usuarios WHERE senha='$senha' AND email='$email'";
$sql = $pdo->query($sql);
if ($sql->rowCount()>0){
    $info=$sql->fetch();

    $_SESSION['logado']=$info['id'];
    header("location:index.php");

}


}


?>
<form method="POST">
    E-mail:<br />
    <input type="email" name="email" /><br /><br />

    Senha:<br />
    <input type="password" name="senha" /><br /><br />

    <input type="submit" value="Entrar" /> <a href="cadastro.php">Cadastrar</a>
</form>