<?php
require_once 'Conexao.php';
class ClassVideosDAO
{
    public function listarVideos()
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM videos order by (nome) asc";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $videos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function cadastrar(ClassVideos $cadastrarVideo)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO videos (nome, link, embed) values (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarVideo->getNome());
            $stmt->bindValue(2, $cadastrarVideo->getLink());
            $stmt->bindValue(3, $cadastrarVideo->getEmbed());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


}