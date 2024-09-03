<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <?php 
    include ('recebe.php');
    ?>
</head>
<body>
    <form method="POST" action="">
    Comparador de valores <br>

    Número 1: <input type=text name=n1> <br>
    Número 2: <input type=text name=n2> <br>
    Número 3: <input type=text name=n3> <br>

    <button type="submit" name=comparar value=comparar>COMPARAR</button>
    </form>
    <?php 
    comparar(@$_POST['n1'], @$_POST['n2'], @$_POST['n3'], @$_POST['comparar']);
    ?>
</body>
</html>