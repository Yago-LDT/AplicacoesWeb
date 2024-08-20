<html>
    <head>
        <div>
            <table id="table">
                <?php
$v=$_POST['valor'];
$v1=$_POST['parcelas'];

if($v1 >1 && <=3){

    echo "Valor da compra: ",$v+($v*0,05),;
    }

    else if($v1>3){

    echo "Valor da compra: ",$v+($v*0,1),;
    }

else {
    echo "Valor da compra: ",$v+($v*0,1),;
    }
    for($cont=1;$cont<=$v1;$cont++){
    echo "<tr class=",$class,"<td><b>Valor das parcelas:",$v1"</b></td></tr>";}

?>
</table>
</div>
</body>
</html>
