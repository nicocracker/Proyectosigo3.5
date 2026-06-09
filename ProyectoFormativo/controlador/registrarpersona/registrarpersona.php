<?php

include('../../modelo/conexion.php');
$rol=$_POST['idrol'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$documento=$_POST['tipodoc'];
$numdocumento=$_POST['numdocumento'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numero_persona=$_POST['telefono'];
$direccion_persona=$_POST['dire'];


$sql="INSERT INTO usuario(IdRol,TipoDocumento,NumDocumento,Nombre,Apellido,Telefono,Correo,Direccion,Estado,Contrasena)
      VALUES ('$rol','$documento','$numdocumento','$nombre','$apellido','$numero_persona','$correo','$direccion_persona','Activo','$contrasena')";


$resultado=mysqli_query($conexion,$sql);

if(mysqli_affected_rows($conexion)){ 
        header("Location: ../../vista/pgprincipal/pgprincipal.php");
}else{ 
        echo "Datos NO insertados" . mysqli_error($conexion);
} 
if (strlen($numdocumento) > 20) {
    die("El número de documento es demasiado largo.");
}
?> 