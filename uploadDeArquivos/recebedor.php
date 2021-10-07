<?php
$arquivo=$_FILES['arquivo'];
$nomeArquivo=md5(time()).'.png';
if (isset($arquivo['tmp_name'])&&empty($arquivo['tmp_name'])==false){
    move_uploaded_file($arquivo['tmp_name'],'arquivos/'.$nomeArquivo);
echo'arquivo enviado com sucesso!';
}



?>