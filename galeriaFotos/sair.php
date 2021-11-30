<?php 
session_start();
require 'config.php';
$id=$_SESSION['id'];
$sql="UPDATE users SET status=NOW() WHERE id='$id'";
$pdo->query($sql);
unset($_SESSION['id']);
unset($_SESSION['uploadok']);
header('location:index.php');