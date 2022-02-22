<?php
require'usuarios.php';
$conect=new Usuarios();


//$result=$conect->selecionar(2);
//$conect->adicionar('MAARI','mariana.gmail.com',123);
//$conect->atualizar('ratabum','ratabummm@kabum.com',123,1);
$conect->delete(4);

?>