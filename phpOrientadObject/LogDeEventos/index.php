<?php
require 'historico.class.php';
$log=new Historico();
$log->registrar("entrou na pagina index");
?>
<a href="pagina1.php">pagina 1</a>
<?php
$listar=new Historico();
$dados=$listar->listar();
foreach($dados as $listDados){
    echo "id".$listDados['id']."- ip:".$listDados['ip']." data-".$listDados['data_acao']." Acao:".$listDados['acao'];
    echo"<br>";
}
