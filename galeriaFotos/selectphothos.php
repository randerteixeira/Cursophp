<!-- essa sessao foi criada para facilitar a manutencao da esposicao idependente de fotos
podendo dar manutencoes e mundancas futuras -->
<?php
//session_start();
require 'config.php';
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $sql = ('SELECT * FROM img');
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        $sql = $sql->fetchAll();
        foreach ($sql as $photos) :
            $iduser=$photos['iduser'];
            $sql=("SELECT fotoperfil FROM users WHERE id='$iduser'");
            $sql=$pdo->query($sql);
            if($sql->rowCount()>0){
                $fotouser=$sql->fetch();
               $foto=$fotouser['fotoperfil'] ;
                
            }

?>
            <div class="imagem_item">
                <div class="imguser"><img src="<?php echo$foto?>" alt=""></div>
                <img src="<?php echo $photos['imgname'];  ?>" alt="">
                <div class="icon_image">
                    <div class="icon"><a href="#" download="<?php echo $photos['imgname'] ?>">⇩</a></div>
                    <div class="icon"><a href="ver.php?ver=<?php echo $photos['imgname'] ?>">👁</a></div>
                    <div class="icon"> <a href="excluir.php?id=<?php echo $photos['id'] ?>&img=<?php echo $photos['imgname'] ?>">&#128503;</a></div>



                </div>
            </div>
<?php
        endforeach;
    }
}




?>