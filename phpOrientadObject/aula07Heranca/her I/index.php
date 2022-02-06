<?php
class Animal
{
    public $nome;
    public $raca;
}
class Cavalo extends Animal
{
    public $quant_patas;
    public $tip_pelo;
}
class Gato extends Animal
{
    public $quant_patas;
    public $miado;
}
$cavalo = new Cavalo();
$cavalo->nome = "pocoto";
$cavalo->raca = "mijoleta";
$cavalo->quant_patas = 4;
$cavalo->tip_pelo = "marrom";

$gato = new Gato();

$gato->nome = "chanim";
$gato->raca = " siames";
$gato->quant_patas = "4";
$gato->miado = "miau";
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
    <h1>Cavalo</h1>
    raca:<?php echo $cavalo->raca; ?><br>
    nome:<?php echo $cavalo->nome; ?><br>
    patas:<?php echo $cavalo->quant_patas; ?><br>
    cor:<?php echo $cavalo->tip_pelo; ?><br>

    <h1>Gato</h1>
    nome:<?php echo $gato->nome; ?><br>
    raca:<?php echo $gato->raca; ?><br>
    patas:<?php echo $gato->quant_patas; ?><br>
    cor:<?php echo $gato->miado; ?><br>



</body>

</html>