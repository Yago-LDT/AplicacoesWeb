<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Visao/css/form.css">
    <title>ListaVendas</title>
    <script language="javaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Deseja continuar?');
    }
</script>
</head>
<body>

<?php
require './Modelo/ClassVenda.php';
require './Modelo/DAO/ClassVendaDAO.php';

$classVendaDAO = new ClassVendaDAO();
$us = $classVendaDAO->listarVendas();
echo "<table>";
echo " <tr>";
echo " <th scope = 'col'><p align='center'>Produto</p></th>";
echo " <th scope='col'><p align='center'>Valor</p></th> ";
echo " <th scope='col'><p align='center'>Quantidade</p></th> ";
echo "      <th scope='col'><p align='center'>Exluir</p></th> ";
echo "      <th scope='col'><p align='center'>Alterar</p></th>";
echo "  <tr>";

foreach ($us as $us) {
    echo "<tr>";
    echo "<td scope='col'><p align='center'>" . $us['produto'] . "</p></td>";
    echo "<td scope='col'><p align='center'>" . $us['valor'] . "</p></td>";
    echo "<td scope='col'><p align='center'>" . $us['quantidade'] . "</p></td>";
    echo "<td scope='col'><a href='Controle/ControleVenda.php?ACAO=excluirVenda&idex=".$us["id"]."' onclick='return checkDelete()'>
    <input type='button' name='excluir' id='excluir' value='excluir' class='btn btn-danger'></a></td>";
    echo "<td scope='col'><a href='Visao/FormAltVenda.php?idex=" . $us["id"] . "'><input type='button' value='alterar' class='btn btn-warning'></a></td>";
    echo "</tr>"; 
}
echo "</table>";
echo "<div>";
?> 
</body>
</html>