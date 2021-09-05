<?php
//     explode
//separar a string em um array 
$nome="rander gabriel batista teixeira";
$separada =explode(" ",$nome);
echo'separadas<br>';
foreach($separada as $key => $value) {
echo" $key $value<br>";
}
//      implode
//Aqui o iverso da operação 
$juntas=implode(" ",$separada);
echo"junta=<br>".$juntas;


//            number_format
//formartar quantos numeros depois da virgula 
$y=3.65655665566;
$x=number_format($y,2);
echo " NNUMERO NORMAL ",$y;
echo"neumero formatado=", $x;
echo "<br> A soma e=", $x+$x;



//               str_replace
//Trocar alglo em alguma string str_replace("obj-trocar","pelo_oque",$naOnde)
$texto="O rander gatim e muito lindo";
$modificado=str_replace("lindo","gatim",$texto);
echo"<br>",$texto ,"==> modificado por:",$modificado;




//         strtolower
// ex strtolower($string)--> passa para minusculo
//modificar uma string para totalmente minuscula 
$string="Rander Gabriel Batista Teixeira";
$stringMinuscula=strtolower($string);
echo"<br>","$stringMinuscula";

//       strtoupper
// ex strtoupper($string)--passa para maiusculo
// deixa uma string totalmente maiuscula 
$stringMaiuscula=strtoupper($stringMinuscula);
echo"<br>",$stringMaiuscula;



//       substr
// ex substr($string , de tal posição, ate tal posição)
// ela retira o pedaço da string que vc quiser
$substr =substr($stringMaiuscula,0,3);
echo"</br>as 3 primeiras letras e :",$substr;


//     ucfirst
//essa função transforma aprimeira letra da string em maiuscula 
echo ucfirst($stringMinuscula);// no caso ela originalmente essa string ela e rander gabriel batista teixeira
//ela vai retornar Rander gabriel batista teixeira 


//    ucwords
// essa função ela retorna todas as palavras dentro da string com a primeira letra miuscula 
echo ucwords($stringMinuscula)//originalmente ela e rander gabriel batista teixeira 
// ela vai retornar Rander Gabriel Batista Teixeira 
?>