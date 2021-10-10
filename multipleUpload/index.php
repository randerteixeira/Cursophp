<?php
if (isset($_FILES['arquivos'])) {//verifica se foi enviado os arquivos 
    if (count($_FILES['arquivos']['tmp_name']) > 0) {//aq testa quantos arquikvos foram enviados no caso maiores que zero
        for ($i = 0; $i < count($_FILES['arquivos']['tmp_name']); $i++) {// aq da um for no array que foi criado 
            $nomeArquivo=time().rand(0,999);// aq e so para renomear os arquivos que foram criados 
        move_uploaded_file($_FILES['arquivos']['tmp_name'][$i],'arquivos/'.$nomeArquivo.'png');// essa parte e aonde envvia todos os arquivoos para a pasta 
         
        }
    }
}


?>
<!-- criacao do forrmulario que aparecera para  o user utileze o multiple para o envio de varios arquikvos  -->
<form method="post" enctype="multipart/form-data">
    <input type="file" multiple name="arquivos[]" id="">
    <input type="submit" value="enviar">


</form> 


