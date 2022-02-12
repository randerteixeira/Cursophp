<?php
// essa classe e responsavel por toda a mecanica do crud 
class Contato
{
    private $pdo;

    // metodo construtor para fazer a conexao com o banco de dados ....
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=crud_contrutor;host=localhost", "root", "");
    }

    //primeira parte do crud para adicinar algo no banco de dados ....
    public function adicionar($email, $nome = '')
    {
        if ($this->existeEmail($email) == false) {
            $sql = "INSERT INTO usuarios (nome,email) VALUES (:nome,:email)"; //construcao do crud comum pdo
            $sql = $this->pdo->prepare($sql); //init prepare
            $sql->bindValue(':nome', $nome); //prepare
            $sql->bindValue(':email', $email); //preparando
            $sql->execute(); // execucao da query
            return true; // se tudo correr bem retorna verdade
        } else {
            return false; // senao retorna falso
        }
    }
    //segunda parte do crud aonde ira selecionar um usuario pelo email
    public function getNome($email) // envia um email
    {
        $sql = "SELECT nome FROM usuarios WHERE email=:email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        // se tudo correr bem ira retornar os ou o usuario que conter esse email
        if ($sql->rowCount() > 0) {
            $info = $sql->fetch(); // info recebe o array com o usuario que contem o requerido email....
            return $info['nome'];
        } else {
            return ''; //ou retorna um array vasio
        }
    }
    public function getAll()
    {
        $sql = " SELECT * FROM usuarios "; // recebe todos os usuarios que existem na tabela usuarios 
        $sql = $this->pdo->query($sql); //execucao da query

        if ($sql->rowCount() > 0) { // se tudo correr bem retornara um resultado aqui testa se retornou 
            return $sql->fetchAll();
        } else {
            return array(); //ou retorna uma array vasia..
        }
    }
    public function editar($nome, $email)
    {
        if ($this->existeEmail($email) == true) {
            $sql = "UPDATE usuarios SET nome=:nome WHERE email=:email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }
    public function deletar($email)
    {
        if ($this->existeEmail($email)) {
            $sql = "DELETE FROM usuarios WHERE email=:email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }
    private function existeEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email=:email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
