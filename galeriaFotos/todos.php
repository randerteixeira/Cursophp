<?php
//session_start();
//require 'config.php';
$sql = ('SELECT * FROM users');
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {

    foreach ($sql->fetchAll() as $users) :

?>

        <div class="containerusers">
            <div class="imguser"><img src="<?php echo $users['fotoperfil']; ?>" alt=""></div>
            <div class="nameuser"><?php echo $users['nome']; ?></div>
        </div>
<?php
    endforeach;
}


?>