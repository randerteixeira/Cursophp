<?php
include 'contato.class.php';

$contato = new Contato();
$nome=$contato->getNome($_GET['email']);


?>


<h1>Alterar Nome</h1>
<form action="alter.php" method="get">
<input type="text"  name="nome"placeholder="<?php echo $nome;?>">
<input type="email" name="email" value="<?php echo $_GET['email']?> " disabled>
<input type="submit" value="enviar">
</form>