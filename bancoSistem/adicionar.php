<?php
session_start();
require "config.php";

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    if(!empty($_POST['senha'])){
    $nome = addslashes($_POST['nome']);
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

   $sql = $pdo->prepare("INSERT INTO contas SET titular=:nome,agencia=:agencia,conta=:conta,senha=:senha,saldo=:saldo");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->bindValue(":saldo", 0);
    $sql->execute();
    }
 
} else {
    echo "erro";
}





?>
<h1>Inter cadastro</h1>
cadastro de novo cliente
<form method="post">
    nome: <br>
    <input type="text" name="nome" id=""><br><br>
    agencia: <br>
    <input type="number" name="agencia" value="<?php echo rand(100, 999) ?>"><br><br>
    conta: <br>
    <input type="text" name="conta" value="<?php echo rand(1000, 9999) . "." . rand(1000, 9999) . "-" . rand(1, 9) ?>"><br>
    senha: <br>
    <input type="password" name="senha" id="">
    <br><br>
    <input type="submit" value="cadastrar">

</form>
<a href="exit.php"><button>sair</button></a>