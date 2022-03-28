<?php
class Usuarios
{
    private $pdo;
    private $id;
    private $email;
    private $senha;
    private $nome;


    public function __construct($i = null)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=pdo;host=localhost", "root", "");
        } catch (PDOException $e) {
            echo "ERRO_pdo" . $e->getMessage();
        }
        if (!empty($i)) {

            $sql = "SELECT * FROM usu WHERE id =?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));

            if ($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->email = $data['email'];
                $this->nome = $data['nome'];
            }
        }
    }

    //get  id

    public function getId()
    {
        return $this->id;
    }


    // get and set email
    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    //get and set senha
    public function getSenha()
    {
        return $this->senha;
    }


    public function setSenha($senha)
    {
        if(empty($senha)){
            $this->senha='01';
        }
        else{
        $this->senha = $senha;
        }
        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    public function salvar()
    {
        if (!empty($this->id)) {
            $sql = "UPDATE usu SET nome=?,email=?,senha=? WHERE id=?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->nome, $this->email, md5($this->senha), $this->id));
        } else {
            $sql = "INSERT INTO usu SET nome=?,email=?,senha=?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->nome, $this->email, md5($this->senha)));
        }
    }
    public function delete(){
        $sql="DELETE FROM usu WHERE id =?";
        $sql= $this->pdo->prepare($sql);
        $sql->execute(array($this->id));
        echo "deletado com sucesso";



    }
}
