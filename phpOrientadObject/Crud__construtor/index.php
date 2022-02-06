<?php
include 'contato.class.php';

$contato = new Contato();
/*$contato->adicionar('randerifurutai@gmail.com','rander');
$contato->adicionar('rander-pdr_@hotmail.com','rander batista Teixeira');*/
$contato->deletar('rander-pdr_@hotmail.com');
$lista = $contato->getAll();

foreach ($lista as $itens) {
    echo"</br>";
    echo $itens['nome']." ";
    echo $itens['email'];
}
