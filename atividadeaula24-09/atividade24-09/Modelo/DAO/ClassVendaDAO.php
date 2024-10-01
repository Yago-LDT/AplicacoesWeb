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

        public function buscarVenda($id)
    {
        try {
            $venda = new ClassVenda();
            $pdo = Conexao::getInstance();
            $sql = "SELECT id, produto, valor, quantidade FROM vendas WHERE id =:id LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id);

            $stmt->execute();
            $vendaAssoc = $stmt->fetch(PDO::FETCH_ASSOC);

            $venda->setidVenda($vendaAssoc['id']);
            $venda->setProduto($vendaAssoc['produto']);
            $venda->setValor($vendaAssoc['valor']);
            $venda->setQuantidade($vendaAssoc['quantidade']);

            return $venda;
        } catch (PDOException $ex) {
            return $ex->getMessage();
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
            return $lista;
        } catch (PDOException $exc){
            echo $exc -> getMessage();
        }

    }

    public function alterarVenda(ClassVenda $alterarVenda)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE vendas SET produto=?, valor=?, quantidade = ? WHERE id=? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $alterarVenda->getProduto());
            $stmt->bindValue(2, $alterarVenda->getvalor());
            $stmt ->bindValue(3, $alterarVenda->getquantidade());
            $stmt->bindValue(4, $alterarVenda->getidVenda());
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function excluirVendas($idVenda)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM vendas WHERE id =:idVenda";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':idVenda', $idVenda);
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            // echo $ex->getMessage();
        }
        }

    }
?>