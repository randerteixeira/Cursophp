<?php
// pode ser chamado para transformar data US para Br
function data($data)
{
    return date("d/m/Y", strtotime($data));
}
 // retorna uma cor dependendo do poder do usuario
function cores($poder)
{
    if ($poder == 1) {
        return $cor = 'red';
    }
    if ($poder == 2) {
        return $cor = 'blue';
    }
    if ($poder == 3) {
        return $cor = 'pink';
    }
}
//recebe qualquer data expl qualquer dias desde a postagem 
function times($time)
{
    $dataatual = date('d-m-Y');
    $dataatual = new DateTime($dataatual);
    $time = new DateTime($time);
    $time2 = $dataatual->getTimestamp();
    $time1 = $time->getTimestamp();
    return floor(($time2 - $time1) / 86400);
}
function uploadok(){
if(isset($_SESSION['uploadok'])&&!empty($_SESSION['uploadok'])){
    echo $_SESSION['uploadok'];
}

}
