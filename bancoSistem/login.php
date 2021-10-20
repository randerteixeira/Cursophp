<?php
session_start();
require "config.php";
if (isset($_POST['agencia']) && !empty($_POST['agencia'])) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);
    $sql = $pdo->prepare("SELECT *FROM contas WHERE agencia=:agencia AND conta=:conta AND senha=:senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $_SESSION['banco'] = $sql['id'];
        header("location:index.php");
    }
}


require 'head.php';
?>


<div class="container_login">
    <div class="logo_login">...</div>

    <form class="form_login" method="post">
        <div class="form_input_login">
        <div class="label">
            agencia:
            </div>


            <input type="text" name="agencia" id="">
        </div>

        <div class="form_input_login">
        <div class="label">
            conta:
            </div>
            <input type="text" name="conta">
        </div>
        <div class="form_input_login">
            <div class="label">
            senha:
            </div>
            <input type="password" name="senha">
        </div>
        <div class="btn">
        <input  id="btn_login"type="submit" value="entrar">
        </div>
    </form>



    <p>Você e do adiministrativo ?</p>
    <a href="login_adm.php"><button> entre por aqui </button></a>
</div>
<?php
require 'rodape.php';
?>