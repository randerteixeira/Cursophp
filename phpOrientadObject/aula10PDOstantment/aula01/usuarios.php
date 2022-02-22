<?php
class Usuarios
{
    private $db;
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname=pdo;host=localhost", "root", "");
        } catch (PDOException $e) {
            echo "falha:" . $e->getMessage();
        }
    }
    public function selecionar($id)
    {
        $sql = $this->db->prepare("SELECT * FROM usu WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        $array[] = array();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function adicionar($nome, $email, $senha)
    {
        $sql = $this->db->prepare("INSERT INTO usu (nome,email,senha)VALUES(:nome ,:email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id)
    {
        $sql = $this->db->prepare("UPDATE usu SET nome=?,email=?,senha=? WHERE id=?");
        $sql->execute(array($nome, $email, md5($senha), $id));
    }
    public function delete($id)
    {

        $sql = $this->db->prepare("DELETE FROM usu WHERE id=?");
        $sql->bindValue(1, $id);
        $sql->execute();
    }
}
