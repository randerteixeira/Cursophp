<?php
session_start();
include 'contato.class.php';

$contato = new Contato();
$itens = $contato->getAll();
?>

<a href="add.php">[Adicionar]</a>
<table border="1" width="500">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>edit</th>
        <th>delet</th>
    </tr>

    <?php
    foreach ($itens as $item) :

    ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['nome'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td style="background-color:green;">
                <a href="alterar.php?email=<?php echo $item['email'] ?>">
                    alterar
                </a>
            </td>
            <td style="background-color:red;">
                <a href="delete.php?email=<?php echo $item['email'] ?>">
                    excluir
                </a>
            </td>
        </tr>
    <?php
    endforeach;


    ?>




</table>
