<?php
session_start();
if(isset($_SESSION['id'])&&empty($_SESSION['id'])){
    echo '<script>alert("essa pagina esta vazia")</script>';  

}else{
    header("location:login.php");
}



?>

