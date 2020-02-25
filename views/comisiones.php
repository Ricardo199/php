<form action="" method="POST">
    Introdusca su salario por favor <input type="text" name="sal" required/>
    <input type="submit" value="enviar" name="enviar"/>
</form>
<?php 
    if(isset($_REQUEST['enviar'])){
        $sal=$_REQUEST['sal'];
        $comi=$sal*0.10+1;
        $tot3=$sal+($comi*3);
        $tot10=$sal+($comi*10);
        $tot15=$sal+($comi*15);
        echo "Su salario por 3 ventas es: $".$tot3."<br>";
        echo "Su salario por 10 ventas es: $".$tot10."<br>";
        echo "Su salario por 15 ventas es: $".$tot15."<br>";
    }
?>