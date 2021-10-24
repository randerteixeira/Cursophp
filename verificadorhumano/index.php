<?php
session_start();
$num1=rand(1,9);
$num2=rand(1,9);
$_SESSION['verif']=$num1+$num2;

?>
<h1>Voce e um robo?</h1>
<form action="home.php" method="post">
    <?php echo $num1."+".$num2."="?>
    <input type="number" name="teste" id="">
    <input type="submit" value="entrar">
</form
