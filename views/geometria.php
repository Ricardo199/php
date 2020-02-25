<form action="geometria.php" method="POST">
    Introdusca la base por favor <input type="text" name="bass" required/><br>
    Introdusca la altura por favor <input type="text" name="alt" required/><br>
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