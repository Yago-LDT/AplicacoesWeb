<?php
require_once 'Conexao.php';
class ClassVendaDAO {

    public function vender(ClassVenda $cadastrarVenda)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO vendas (produto, valor, quantidade) values (?, ?, ?)";
            $stmt = $pdo ->prepare($sql);
            $stmt->bindValue(1, $cadastrarVenda->getProduto());
            $stmt->bindValue(2, $cadastrarVenda->getvalor());
            $stmt->bindValue(3, $cadastrarVenda-> getquantidade());
            $stmt -> execute();
            return TRUE;
        } catch(PDOException $exc) {
            echo $exc -> getMessage();
        }

    }

    public function listarVendas()
    {
        try
        {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM vendas order by (produto) desc";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $exc){
            echo $exc -> getMessage();
        }

    }

}
?>