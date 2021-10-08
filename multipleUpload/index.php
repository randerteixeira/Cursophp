<?php
if (isset($_FILES['arquivos'])) {
    if (count($_FILES['arquivos']['tmp_name']) > 0) {
        for ($i = 0; $i < count($_FILES['arquivos']['tmp_name']); $i++) {
            $nomeArquivo=time().rand(0,999);
        move_uploaded_file($_FILES['arquivos']['tmp_name'][$i],'arquivos/'.$nomeArquivo.'png');
         
        }
    }
}


?>
<form method="post" enctype="multipart/form-data">
    <input type="file" multiple name="arquivos[]" id="">
    <input type="submit" value="enviar">


</form>