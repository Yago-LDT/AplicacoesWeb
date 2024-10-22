<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Venda</title>
</head>
<body>
<h4>Formulário de Cadastro de Vendas</h4><br>
    <form method="post" action="./Controle/ControleVendas.php?ACAO=cadastrarVenda">
      <p> ID do Produto: <input type="text" name="idproduto" maxlength="40" placeholder="ID"/></p>
      <p> Quantidade: <input type="text" id="qtd" name="quantidade" maxlength="20" placeholder="Quantidade" /></p>
      <button type="submit" value="Registrar">Registrar</button>
      <button type="reset" value="Limpar">Limpar</button>
    </form>
</body>
</html>