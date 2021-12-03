<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container_global">
        <header>
            <div class="logo">Minha Galeria</div>
            <ul class="menu">
                <li><a href="#">home</a></li>
                <li><a href="todos.php">usuarios</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
            <div class="space_user">
                <div class="img_perfil_user">
                    <img src="<?php echo $imgperfil ?>" alt="">

                </div>
                <a href="fotoPerfil.php">🖉</a>
                <div class="name_user"><?php echo $nome; ?></div>
                <p>ultima visita:
                    <?php echo times($data); ?> dias</p>
                <div class="btn_sair"><a href="sair.php">sair</a></div>
            </div>

        </header>