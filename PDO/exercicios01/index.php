<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 01</title>
</head>
<body>
    <table width="100%" >
        
<tr>
    <th>id</th>
    <th>Nome</th>
    <th>Email</th>
    <th>açoes</th>
</tr>
    <a href="adduser.php">Adicionar</a>
    <?php
    $sql="SELECT *FROM usuarios";
    $sql=$pdo->query($sql);
        if($sql->rowCount()>0){
             foreach($sql->fetchALL()as $usuario){
             echo '<tr>';

                echo'<td>'.$usuario["id_user"].'</td>';
                echo'<td>'.$usuario["nome"].'</td>';
                echo'<td>'.$usuario["email"].'</td>';
                echo'<td><a href="edite.php?id='.$usuario['id_user'].'">Editar</a>   <a href="delete.php?id='.$usuario['id_user'].'">excluir</a></td>';

             echo'</tr>';

    }
    }
    ?>
    </table>
</body>
</html>