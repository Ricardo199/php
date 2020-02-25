<form action="ganancia.php" method="POST">
    Introdusca la base por favor <input type="text" name="bass" required/>
    Introdusca la altura por favor <input type="text" name="alt" required/>
    <input type="submit" value="enviar" name="enviar"/>
</form>
<?php 
    if(isset($_REQUEST['enviar'])){
        $bass=$_REQUEST['bass'];
        $alt=$_REQUEST['alt'];
        if($bass!=$alt){
        $area=$bass*$alt;
        $perim=$area*2;
        }
    }
?>