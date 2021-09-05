<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $x=0;
    $nomes=array('rander','manuela','ana elisa','nicole','mariana');
        foreach($nomes as $familia){
            $x++;
            echo $x. $familia.'<br/>';
        }
    $nomes_alunos=array(
        array("nome"=>"rander", "idade"=>25),
        array("nome"=>"mariana", "idade"=>28),
        array("nome"=>"manuela","idade"=>10)
    );
    foreach($nomes_alunos as $alunos){

        echo$alunos["nome"].$alunos["idade"]."</br>";
    }
    ?>
</body>
</html>