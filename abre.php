<?php
$conexion= new mysqli("localhost","root","","negocio");
if($conexion){
    echo "La conexion se realizo";
}
else{
    echo "Algo anda mal";
}

?>