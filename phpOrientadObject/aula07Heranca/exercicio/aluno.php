<?php

class Aluno extends Persona {
    
    private $mtr;
    private $curso;
    
    public function cancelarMtr(){
        echo 'matricula sera cancelada';
    
   
}
public function getMtr() {
    return $this->mtr;
}

public function getCurso() {
    return $this->curso;
}

public function setMtr($mtr) {
    $this->mtr = $mtr;
}

public function setCurso($curso) {
    $this->curso = $curso;
}
}
?>