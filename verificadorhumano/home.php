<?php
session_start();
if($_SESSION['verif']==$_POST['teste']){
    echo"ola mundo";
}else{
    echo "fake";
}



?>