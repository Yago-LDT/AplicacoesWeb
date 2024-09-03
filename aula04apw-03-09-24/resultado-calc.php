<?php
function calcular($n1, $n2, $acao){
    if($acao=="somar"){
        $resultado=$n1+$n2;
        echo"<center> A soma é $resultado</center>";
        echo "<center><a href='form-calculadora.php'>Voltar</a></center>";
    }
}
?>