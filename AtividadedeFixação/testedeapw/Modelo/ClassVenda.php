<?php
class ClassVenda
{
    private $idproduto;
    private $nomeproduto;
    private $estoqueproduto;
    private $iditensvendas;
    private $produtoidproduto;
    private $quantitensvendas;

    function getIdproduto()
    {
        return $this->idproduto;
    }

    function getNomeproduto()
    {
        return $this->nomeproduto;
    }

    function getEstoqueproduto()
    {
        return $this->estoqueproduto;
    }

    function getIditensvendas()
    {
        return $this->iditensvendas;
    }

    function getProdutoidproduto()
    {
        return $this->produtoidproduto;
    }

    function getQuantitensvendas()
    {
        return $this->quantitensvendas;
    }

    function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;
    }

    function setNomeproduto($nomeproduto)
    {
        $this->nomeproduto = $nomeproduto;
    }

    function setEstoqueproduto($estoqueproduto)
    {
        $this->estoqueproduto = $estoqueproduto;
    }

    function setIditensvendas($iditensvendas)
    {
        $this->iditensvendas = $iditensvendas;
    }

    function setProdutoidproduto($produtoidproduto)
    {
        $this->produtoidproduto = $produtoidproduto;
    }

    function setQuantitensvendas($quantitensvendas)
    {
        $this-> quantitensvendas= $quantitensvendas;
    }
}