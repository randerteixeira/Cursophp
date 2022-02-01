<?php


class Professores extends Persona {
    private $especialidade;
    private $salario;
    
    public function receberAum($aum){
        $this->salario+$aum;
        
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
?>