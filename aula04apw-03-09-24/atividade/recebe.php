<?php
function comparar($n1, $n2, $n3, $comparar){
    if($comparar=="comparar"){
        $maior=max($n1, $n2, $n3);
        echo"<center> O maior número é $maior</center>";
        echo "<center><a href='calculadora.php'>Voltar</a></center>";
    }
}
?>