<?php 
if(isset($_REQUEST['enviar'])){
    echo "Nombre: ".$_REQUEST['nombre']."<br>";
    echo "Apellido: ".$_REQUEST['apellido']."<br>";
    echo "Direcci&oacute;n: ".$_REQUEST['direccion']."<br>";
    echo "Tel&eacute;fono: ".$_REQUEST['telefono']."<br>";
    echo "DUI: ".$_REQUEST['dui'];
}
?>