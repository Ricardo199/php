<form action="" method="POST">
    Introdusca el monto inical por favor <input type="text" name="mon" required/>
    <input type="submit" value="enviar" name="enviar"/>
</form>
<?php 
    if(isset($_REQUEST['enviar'])){
        $mon=$_REQUEST['mon'];
        $int=$mon*0.035;
        echo "Intereces a los tres meces: $".$int*3;
        echo "<br>";
        echo "Intereces a los seis meces: $".$int*6;
        echo "<br>";
        echo "Intereces a los doce meces: $".$int*12;
    }
?>