<?php
session_start();
require 'config.php';
require 'functions.php';
$id = addslashes($_SESSION['id']);
if (isset($id) && !empty($id)) {
    
    $sql = "SELECT *FROM users WHERE id='$id'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
      $nome=$sql['nome'];
      $email=$sql['email'];
      $data=$sql['status'];
     $cor=cores($sql['power']);
     $poder=$sql['power'];
     $_SESSION['poder']=$poder;
    } else {
        echo "nao achamos";
    }
} else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">;
    <title>Document</title>
</head>
<body>
 <a href="sair.php">sair</a>
<h1>olà <?php echo$nome;?></h1> <p>ultima visita:<?php echo times($data);?> dias</p>   
<?php
if($poder==3){
require 'upload.php';

}
uploadok();
?>
<div class="imagem_container">
<?php
require 'selectphothos.php';

?> 
</div>
</body>
</html>

