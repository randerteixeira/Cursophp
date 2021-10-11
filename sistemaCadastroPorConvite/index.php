<?php
session_start();
require 'conexao.php';
 if (empty($_SESSION['logado'])){
     header("location:login.php");
     exit;
 }
$email='';
$codigo='';
$sql="SELECT email,codigo FROM usuarios WHERE id ='".addslashes($_SESSION['logado'])."'";
$sql=$pdo->query($sql);
if($sql->rowCount()>0){
    $info=$sql->fetch();
    $email=$info['email'];
    $codigo=$info['codigo'];
}
else{
    echo "algo deu errado ";
}


?>
<h1>Área interna do sistema</h1>
<p>Usuário: <?php echo $email; ?> - <a href="exit.php">Sair</a></p>
<p>Link: http://localhost/Cursophp/sistemaCadastroPorConvite/cadastro.php?codigo=<?php echo $codigo; ?></p>