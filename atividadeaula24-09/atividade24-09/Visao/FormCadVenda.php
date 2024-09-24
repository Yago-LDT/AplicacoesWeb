<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormCadastroVenda</title>
</head>
<body>
    <h4> Formulario de Cadastro de Vendas</h4>
    <form method="post" action="./Controle/ControleVenda.php?ACAO=cadastrarVenda">
    <p> Nome: <input type="text" name="produto" maxlength="50" placeholder="nome do produto"/></p>
    <p> Valor: <input type="text" id="valor" name="valor" maxlength="6" placeholder="digite o valor do produto"/></p>
    <p> Quantidade: <input type="text" id="quantidade" name="quantidade" maxlength="100" placeholder="digite a quantidade"/></p>
    <button type="submit" value="Cadastrar">Cadastrar</button>
    </form>
</body>
</html>