<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
<center>
    <h1>
        <!--código PHP-->
        <?php
        // Função da calculadora
        Function calcular($n1, $n2){
            if($n2 <=1){
                $nd=$n1*0.10;
                $nt=$n1-$nd;
                echo ("Valor a pagar: R$$nt");
            }
            else if($n2 > 0 && $n2 <4){
                $nd=$n1*0.05;
                $nt=$n1-$nd;
                echo ("Valor a pagar: R$$nt");
            }
            elseif($n2 >= 4){
                $nd=$n1*0.10;
                $nt=$n1+$nd;
                echo ("Valor a pagar: R$$nt");
            }
            else{
                echo "Tente novamente";
            }
        }
        //Chamando a funcao
calcular($n1 = $_POST ["n1"], $n2 = $_POST ["n2"])
        ?>
        <br>
        <a href="form.php"> voltar </a> 
    </h1>
</body>
</html>