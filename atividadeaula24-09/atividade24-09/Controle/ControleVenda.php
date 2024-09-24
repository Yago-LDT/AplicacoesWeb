<?php

require_once '../Modelo/ClassVenda.php';
require_once '../Modelo/DAO/ClassVendaDAO.php';

$id =@$_POST['idex'];
$produto =@$_POST['produto'];
$valor =@$_POST['valor'];
$quantidade =@$_POST['quantidade'];
$acao= $_GET['ACAO'];

$novaVenda = new ClassVenda();
$novaVenda ->setidVenda($id);
$novaVenda->setProduto($produto);
$novaVenda->setValor($valor);
$novaVenda->setQuantidade($quantidade);

$classVendaDAO = new ClassVendaDAO();
switch ($acao){
    case "cadastrarVenda":
        $venda = $classVendaDAO->vender($novaVenda);
        if($venda >=1){
            header('Location:../index.php?MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?MSG= Não foi possível realizar o cadastro!');
        }

        break;
        default;
        break;
}


