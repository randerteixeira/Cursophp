<?php
$arrayO=array(1,1,2,2,3,3,4,4,5,5,6,6,7,8,8,9,10,10);
foreach ($arrayO as $item){
    echo $item;echo"<br>";
}

$arrayS=array_unique($arrayO);
foreach ($arrayS as $itens){
    echo $itens."<br>";
}

?>