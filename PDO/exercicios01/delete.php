<?php
require'config.php';

if(isset($_GET['id'])&&empty($_GET['id']==false)){
$id= addslashes($_GET['id']);
$sql="DELETE FROM usuarios WHERE id_user='$id'";
$pdo->query($sql);
header('location:index.php');
}
else{
    echo "erro";
    header('location:index.php');  
}
?>