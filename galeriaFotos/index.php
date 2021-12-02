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
     $imgperfil=$sql['fotoperfil'];
     $_SESSION['poder']=$poder;
    } else {
        echo "nao achamos";
    }
} else {
    header("location:login.php");
}
?>

<?php

require 'header.php';
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
</div>
</body>
</html>

