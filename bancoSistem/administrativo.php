<?php
session_start();
require "config.php";
$id=addslashes($_SESSION['adm']);
$sql=("SELECT *FROM administrativo WHERE id = '$id'");
$sql=$pdo->query($sql);
if($sql->rowCount()>0){
    $sql=$sql->fetch();
    echo "ola sr°".$sql['nome_adm'];

}
else{
    header("location:login.php");
}





?>
<h1>Adiministrativo Inter</h1>
lista de clientes
<table border="1" >
<tr>
<th>titular</th>   
<th>agencia</th>
<th>conta</th>
<th>saldo</th>
    
</tr>
<?php
if(!empty($_SESSION['adm'])){
    $sql=("SELECT *FROM contas");
    $sql=$pdo->query($sql);
    if($sql->rowCount()>0){
        
        foreach ($sql->fetchAll() as  $contas): 
?>
<tr>
            <td><?php echo $contas['titular']; ?></td>
            <td><?php echo $contas['agencia']; ?></td>
            <td><?php echo $contas['conta']; ?></td>
            <td><?php echo"R$". number_format($contas['saldo'],2,",","."); ?></td>
        </tr>
<?php
     endforeach;       
        
    }
}

?>
</table>
<h1>inserir novo cliente</h1>
<a href="adicionar.php"><button>novo cliente</button></a>
<a href="exit.php"><button>sair</button></a>