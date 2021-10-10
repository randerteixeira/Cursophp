<!--CONEXÃO COM BD-->
<?php
try {
    $pdo = new PDO("mysql:dbname=comentarios;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "ERRO" . $e->getMessage();
    exit;
}
?>
<!--INICIO DA PAGINA -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container_global">
        <fieldset>
            <form method="post">
                nome: <br>
                <input type="text" name="nome">
                <br><br>
                comentario: <br>
                <textarea name="mensagem" placeholder="Digite aqui seu Comentario"></textarea><br><br>
                <input type="submit" value="enviar"><button>att</button>
            </form>
        </fieldset>


<!-- php que seleciona os itens no bd-->
        <?php
        $sql = "SELECT * FROM mensagen ORDER BY 	data_msg DESC";
        $sql = $pdo->query($sql);
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $mensagen) :
        ?>
                <div class="container_msg">
                    <strong> <?php echo $mensagen['nome'] ?>
                    </strong>
                    <p><?php echo $mensagen['msg']; ?></p>
                </div>
        <?php
            endforeach;
        } else {
            echo "não a mesagens";
        }
        ?>
        <?php
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            $nome = $_POST['nome'];
            $texto = $_POST['mensagem'];
            $sql = $pdo->prepare("INSERT INTO mensagen SET nome=:nome, msg=:texto, data_msg=NOW()");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":texto", $texto);
            $sql->execute();
        }


        ?>
    </div>

</html>
</body>