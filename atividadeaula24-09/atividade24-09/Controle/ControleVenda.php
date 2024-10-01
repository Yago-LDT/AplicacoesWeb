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

        case 'alterarVenda':
            //codigo aqui   
             $venda = $classVendaDAO->alterarVenda($novaVenda);
             if($venda == 1){
                 header('Location:../index.php?&MSG= Cadastro atualizado com sucesso!');
             } else {
                 header('Location:../index.php?&MSG= Não foi possivel realizar a atualização!');
             }

             break;

             case "excluirVenda":
                if (isset($_GET['idex'])) {
                    $id = $_GET['idex'];
                    $classVendaDAO = new ClassVendaDAO();
                    $us = $classVendaDAO->excluirVendas($id);
                    if ($us == TRUE) {
                        header('Location:../index.php?PAGINA=listarVendas&MSG= Venda foi excluida com sucesso!');
                    } else {
                        header('Location:../index.php?PAGINA=listarVendas&MSG=Não foi possivel realizar a exclusão da!');
                    }
                }
        
                break;
            default :
                break;	

}




