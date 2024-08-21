<html>
    <head>
        <title>Valor das parcelas</title>
  <meta charset="UTF-8"/>
   <link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
        <div>
            <table id="table">
                <?php
$v=$_POST['valor'];
$v1=$_POST['parcelas'];


if($v1 > 1){
    echo "Valor da compra: ",$v, "<br>Quantidade de parcelas: ",$v1, "<br>Valor total da compra: ".$v+($v*0.05);

    for($cont=1;$cont <= $v1; $cont++){
        if($cont%2==0){
            $class="clara";
           }
           else{
            $class="escura";
           }
           $vtotal=$v+($v*0.05);
            echo "<tr class=",$class,"><td>",($v+($v*0.05))/$v1,"</td></tr>"; 		   
         }
    }

    else if($v1 > 3){
    echo "Valor da compra: ",$v, "<br>Quantidade de parcelas: ",$v1, "<br>Valor total da compra: ".$v+($v*0.1);

    for($cont=1;$cont <= $v1; $cont++){
        if($cont%2==0){
            $class="clara";
           }
           else{
            $class="escura";
           }
           $vtotal=$v+($v*0.05);
            echo "<tr class=",$class,"><td>",($v+($v*0.1))/$v1,"</td></tr>"; 		   
         }
    }

else if ($v1 == 1){
    echo "Valor da compra: ",$v, "<br>Quantidade de parcelas: ",$v1, "<br>Valor total da compra: ".$v-($v*0.05);
    for($cont=1;$cont <= $v1; $cont++){
        if($cont%2==0){
            $class="clara";
           }
           else{
            $class="escura";
           }
           $vtotal=$v+($v*0.05);
            echo "<tr class=",$class,"><td>",($v-($v*0.05))/$v1,"</td></tr>"; 		   
         }
    }

   

?>
</table>
</div>
</body>
</html>
