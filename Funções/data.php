<?php
$dataAtual=date("d/m/Y H:i:s");
echo"$dataAtual";
?>
<br>
<?php
$dataProxima =date('d/m/Y',strtotime("+10 days"));
echo "$dataProxima";
?>