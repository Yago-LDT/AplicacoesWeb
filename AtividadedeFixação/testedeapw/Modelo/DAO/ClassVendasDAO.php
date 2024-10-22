<?php
require_once 'Conexao.php';
class ClassVendasDAO
{
    public function cadastrar(ClassVenda $cadastrarVenda)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO itensvenda (produtoidproduto, quantitensvendas) values (?,?);

            CALL Tgr_ItensVenda_Insert;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarVenda->getProdutoidproduto());
            $stmt->bindValue(2, $cadastrarVenda->getQuantitensvendas());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}