<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_ordenar;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "erro" . $e->getMessage();
    exit;
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="arquivos/style.css">
    <title>Document</title>
</head>

<body>
    <table width="400">
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
        </tr>
        <form method="get">
            <select name="ordem" onchange="this.form.submit()">
                <option>...</option>
                <option id="id" value="id"  >pelo id</option>
                <option id="nome" value="nome" >pelo nome</option>
                <option id="idade" value="idade" >pela idade</option>

            </select>
        </form>
        <tr>
            <?php
            if (isset($_GET['ordem']) && !empty($_GET['ordem'])) {
                $order = addslashes($_GET['ordem']);
                $sql = "SELECT * FROM usuarios ORDER BY $order ASC";
            } else {
                $sql = "SELECT * FROM usuarios ORDER BY id ASC";
            }
            $sql = $pdo->query($sql);
            if ($sql->rowCount() > 0) {
                foreach ($sql->fetchAll() as $usuarios) :


            ?>
        <tr>
            <td><?php echo $usuarios['id']; ?></td>
            <td><?php echo $usuarios['nome']; ?></td>
            <td><?php echo $usuarios['idade']; ?></td>
        </tr>
<?php
                endforeach;
            }
?>


    </table>
    <script src="arquivos/script.js">

    </script>
</body>

</html>