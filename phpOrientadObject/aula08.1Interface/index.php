<?php

interface Animal
{
    public function andar();
    public function pular();
}
class Cachorro implements Animal
{
    public function andar()
    {
        echo "andei";
    }
    public function pular()
    {
        echo "pulei";
    }
}
$cachorro = new Cachorro();
for ($i = 0; $i < 10; $i++) {
    $cachorro->andar();
    echo"<br>";
    $cachorro->pular();
    echo"<br>";

}
