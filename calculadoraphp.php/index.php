<?php
try{
$pdo= new PDO("mysql:dbname=projeto_calculadora;host=localhost","root","");
}catch(PDOException $e){
    echo"error".$e->getMessage();
    exit;
}?>
<?php
$resultado="";
$num1="";
$num2="";
$op="";
if(isset($_POST['num1'])&&$_POST['num1']!=""){
    if(isset($_POST['num2'])&&$_POST['num2']!=""){
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$op=$_POST['op'];
echo$op; 
switch ($op) {
    case '+':$resultado=$num1+$num2;break;
    case '-':$resultado=$num1-$num2;break;
    case '*':$resultado=$num1*$num2;break;
    case '/':$resultado=$num1/$num2;break;
    
    default:
        echo"algo aconteceu";
        break;
}       
$historico="$num1"." $op "."$num2"."="."$resultado";
$sql="INSERT INTO historico SET soma='$historico'";
$sql=$pdo->query($sql);



}else{
        echo"Digite o segundo numero";
    }
}else{
    echo"Digite o primeiro numero";
}


?>
<form method="post">
    <input type="number" name="num1" id=""><select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><input type="number" name="num2" id="">
    <input type="submit" value="=">
    resultado: <input type="text" value="<?php echo$num1." ".$op." ".$num2."=".$resultado ?>">

</form>
Historico <br><a href="limpar.php">limpar</a>
<?php
$sql="SELECT * FROM historico";
$sql=$pdo->query($sql);
if($sql->rowCount()>0){
    $sql=$sql->fetchAll();
    foreach($sql as $text){
echo $text['soma']."<br>";
    }
}
?>