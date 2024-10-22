<?php
require_once '../Modelo/ClassVenda.php';
require_once '../Modelo/DAO/ClassVendasDAO.php';

$iditensvendas =@$_POST['idex'];
$produtoidproduto =@$_POST['idproduto'];
$quantitensvendas =@$_POST['quantidade'];
$acao = $_GET['ACAO'];

$novaVenda = new ClassVenda();
$novaVenda->setIditensvendas($iditensvendas);
$novaVenda->setProdutoidproduto($produto);
$novaVenda->setQuantitensvendas($quantidade);

$classVendasDAO = new ClassVendasDAO();
switch ($acao) {
    case "cadastrarVenda":
        $venda = $classVendasDAO->cadastrar($novaVenda);
        if($venda >=1){
            header ('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        }
            else{
                header ('Location:../index.php?&MSG= Não foi possível realizar o cadastro!');
            }
            break;
}
