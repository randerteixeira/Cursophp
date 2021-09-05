<?php

 $array =array(
     "nome"=>"rander",
     "idade"=>25,
     "cidade"=>"pires do rio",
    "pais"=>"brasil",
    "estado"=>"goias"
 );

 //                 /*array_keys */
 /**
  * ele cria um array com as chaves do array original
  *Array ( [0] => nome [1] => idade [2] => cidade [3] => pais [4] => estado )
 */
$arraKeys=array_keys($array);
print_r($arraKeys);

//              /* array_value */
/**
 * ele cria um array com os valores do array original
 * Array ( [0] => rander [1] => 25 [2] => pires do rio [3] => brasil [4] => goias )
 */
$arrayValues=array_values($array);
echo"<br>";
print_r($arrayValues);

//               /*array_pop */
/**
 * ele remove o ultimo item do array
 * 
 */
echo"</br>";
array_pop($array);
print_r($array);



//      /**array_shift */
/**
 * ele remove o primeiro item do array 
 */
echo"</br>";
array_shift($array);
print_r($array);
echo"</br>";

//    asort($array)para ordenar o array em ordem alfabetica
//    arsort($array)para ordenar em ordem alfabetica reverso
$arrayName=array(
    "rander",
    "mariana",
    "nicole",
    "manuela",
    "ana eliza"
);
asort($arrayName);
print_r($arrayName);
echo"</br>";


arsort($arrayName);
print_r($arrayName);


//               count($array)
// essa função ela conta quantos itens tem dentro de um, determinado array
$totalDeRegistro=count($arrayName);
echo"<br> O a array tem ".$totalDeRegistro." pessoas cadastradas";


//      in_array()
/**
 * ele retorna verdadeiro ou falso
 * in_array("rander",$arrayName)
 */
$namePesquisa="joaquina";
if(in_array($namePesquisa,$arrayName)){
    echo"<br>sim existe ".$namePesquisa." no registro";
}else {
    echo"<br>nao existe ".$namePesquisa." no registro";
}
?>