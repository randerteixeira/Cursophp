<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        require_once 'pessoas.php';
        require_once 'professores.php';
        require_once 'aluno.php';
        require_once 'funcionarios.php';
        
        $p1=new Persona();
        $p2=new Aluno();
        $p3=new Professores();
        $p4=new Funcionarios();
         
        $p1->setNome("pedro");
        $p2->setNome("maria");
        $p3->setNome("claudio");
        $p4->setNome("faniana");
        $p3->setSalario(200);
        $p3->receberAum(500,2);
        $p3->setSexo('m');
        
        echo $p3->getNome().$p3->getSalario() .$p3->getSexo();
       

        
        ?>
    
    </body>
</html>
