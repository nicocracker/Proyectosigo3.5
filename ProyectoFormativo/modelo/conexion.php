<?php
$db_servidor="localhost";
$db_usuario="root";
$db_contrasena="";
$db_nombre="sigo"; 

$conexion=mysqli_connect($db_servidor,$db_usuario,$db_contrasena,$db_nombre);
if(mysqli_connect_errno()){
    echo "Fallo al conectar la base de datos";
}



?> 