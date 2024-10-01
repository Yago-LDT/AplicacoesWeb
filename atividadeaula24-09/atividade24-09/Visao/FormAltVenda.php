<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
         <title></title>
    </head>
    <body>
        
            <h1>Formulario de atualização de Vendas</h1>
            <hr>
        </div>
		
        <?php
            require '../Modelo/ClassVenda.php';
            require '../Modelo/DAO/ClassVendaDAO.php';
			$id =@$_GET['idex'];
            $novaVenda = new ClassVenda();
            $vendaDAO = new ClassVendaDAO();
            $novaVenda = $vendaDAO->buscarVenda($id);

        ?>
        <form method="post" action="../Controle/ControleVenda.php?ACAO=alterarVenda" >
                <input type="hidden" name="idex" value="<?php echo $novaVenda->getidVenda(); ?>">
                Produto:<input type="text" name="produto" size="50" value="<?php echo $novaVenda->getProduto(); ?>" />
                <br><br>
                Valor:<input type="text" id="valor" name="valor" size="40" value="<?php echo $novaVenda->getvalor(); ?>"/>
                <br><br>
                Quantidade:<input type="text" id="quantidade" name="quantidade" size="40" value="<?php echo $novaVenda->getquantidade(); ?>"/>
				<button type="submit" value="Alterar">Alterar</button> 
				<button  type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </body>
</html>
