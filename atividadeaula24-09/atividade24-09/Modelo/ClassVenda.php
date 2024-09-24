<?php 
class ClassVenda
{
    private $idVenda;
    private $produto;
    private $valor;
    private $quantidade;

function getidVenda()
{
    return $this->idVenda;
}

function getProduto()
{
    return $this->produto;
}

function getvalor()
{
    return $this->valor;
}

function getquantidade()
{
    return $this->quantidade;
}

function setidVenda($idVenda)
    {
        $this->idVenda = $idVenda;
    }

    function setProduto($produto)
    {
        $this->produto = $produto;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

}
?>