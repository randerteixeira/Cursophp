<?php
class Matematica{
    public static string $nome='bonieky';


    public static function somar($x,$y){
        return $x+$y;
    }
}
echo Matematica::somar(10,50);
echo Matematica::$nome;
echo Matematica::somar(10,2);


?>
