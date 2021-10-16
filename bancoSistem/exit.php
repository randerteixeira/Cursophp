<?php 
session_start();
unset($_SESSION['banco']);
unset($_SESSION['adm']);
header("location:login.php");