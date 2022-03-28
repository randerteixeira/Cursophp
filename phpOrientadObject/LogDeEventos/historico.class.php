<?php
class Historico
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=projeto_logeventos;host=localhost", "root", "");
    }
    public function registrar($acao)
    {
        $ip = $_SERVER['REMOTE_ADDR']; //PEGA O IP DO USUARIO
        $sql = "INSERT INTO eventos SET  ip=:ip,data_acao=NOW(),acao=:acao";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':ip', $ip);
        $sql->bindValue(':acao', $acao);
        $sql->execute();
    }
    public function listar()
    {
        $sql = "SELECT *FROM eventos";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        $dados = array();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
        }
        return $dados;
    }
}
