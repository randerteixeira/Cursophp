<?php
session_start();
require "config.php";
if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
    $id = $_SESSION['banco'];
    $sql = "SELECT*FROM contas WHERE id ='$id'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $titular = $sql['titular'];
        $conta = $sql['conta'];
        $agencia = $sql['agencia'];
        $saldo = $sql['saldo'];
    }
} else {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: orange;">Banco Inter</h1>
    <br>
    <h2 class="titular">ola sr°<?php echo $titular; ?></h2>
    <h2>Saldo atual: <div class="saldo"> <?php echo number_format($saldo, 2, ",", "."); ?></div>
    </h2>
    <h3>agência <div class="agencia"><?php echo $agencia ?></div>
    </h3>
    <h3>conta <div class="agencia"><?php echo $conta ?></div>
    </h3>
    
    <a href="exit.php">exit</a>


    <h1>Movimentação da Conta </h1>
    <div class="deposito"></div>
    <form action="deposito.php" method="post">
        depositar <br>
        valor: <input type="text" name="valor" id="">
    <input type="submit" value="depositar">
    </form>
    <div class="saque">

    <div class="saque"></div>
    <form action="saque.php" method="post">
        sacar <br>
        valor: <input type="text" name="valor" id="">
    <input type="submit" value="sacar">
    </form>
    </div>
    <table class="table_move" border="1" width="400">
<tr>

<th>data</th>
<th>valor</th>

</tr>a
<?php
$color='';
$total_mov=0;
$sql=$pdo->prepare("SELECT*FROM historico  WHERE id_conta=:id_conta");
$sql->bindValue(':id_conta',$id);
$sql->execute();
if($sql->rowCount()>0){
    $sql=$sql->fetchAll();
    foreach($sql as $info_mov):
        if($info_mov['tipo']==0){
            $color='green';
            $total_mov+=$info_mov['valor']; 
        }else{
            $color='red';
        $total_mov-=$info_mov['valor'];
        }
?>
<tr>

<td><?php echo date('d/m/Y H:i',strtotime($info_mov['data_operacao']))?></td>
<td style="color:<?php echo $color;?>"><?php if($info_mov['tipo']==0){
    echo  number_format($info_mov['valor'], 2, ",", ".");
}else{echo "-". number_format($info_mov['valor'], 2, ",", ".");}?></td>
</tr>

<?php
endforeach;

}

?>
<tr>
    <td>Valor Total</td>
    <td><?php echo $total_mov;?></td>
</tr>


    </table>
    <?php
    $sql="UPDATE contas SET saldo='$total_mov' WHERE id='$id' ";
    $sql=$pdo->query($sql);
    
    ?>

</body>

</html>