<?php

$result = 0;

class Calculadora
{
    public function somar($x, $y)
    {
        return $x + $y;
    }
    public function subtrair($x, $y)
    {
        return $x - $y;
    }
    public function multiplicar($x, $y)
    {
        return $x * $y;
    }
    public function dividir($x, $y)
    {
        return $x / $y;
    }
    public function resto($x, $y)
    {
        return $x % $y;
    }
}


$calcular = new Calculadora();
function calc($x, $y, $op, $calcular)
{
    if ($op == 'multiplicar') {
        return $calcular->multiplicar($x, $y);
    }
    if ($op == 'dividir') {
        return $calcular->dividir($x, $y);
    }
    if ($op == 'somar') {
        return $calcular->somar($x, $y);
    }
    if ($op == 'subtrair') {
        return $calcular->subtrair($x, $y);
    }
}

if (isset($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['operacao'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $op = $_GET['operacao'];

    $result = calc($n1, $n2, $op, $calcular);
    if ($result != 0) {
        $ip = $calcular->resto($n1, $n2);
        if ($ip == 0) {
            $parimpar = "par";
        } else {
            $parimpar = "impar";
        }
    }
}

?>
<form action="" method="get">
    <input type="text" name="n1" id="">

    <select name="operacao" id="">
    <option value="">escolha...</option>
        <option value="multiplicar">*</option>
        <option value="dividir">/</option>
        <option value="somar">+</option>
        <option value="subitrair">-</option>

    </select>
    <input type="text" name="n2" id="">
    <input type="submit" value="=">

    <?php
    echo $result;
    echo $parimpar;

    ?>
</form>