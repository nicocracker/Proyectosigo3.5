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

/* var_dump($_POST);
die(); */

$sql="UPDATE usuario SET IdRol='$rol',TipoDocumento='$documento',NumDocumento='$numdocumento',Nombre='$nombre',Apellido='$apellido',Telefono='$numero_persona',Correo='$correo',Direccion='$direccion_persona',Estado='Activo',Contrasena='$contrasena' WHERE NumDocumento='$numdocumento'";

$resultado = mysqli_query($conexion,$sql);

  if($resultado === true){
       echo "Datos actualizados correctamente";
       /* header("Location: ../../vista/pgprincipal/pgprincipal.php"); */
    }else{
        echo "Error al insertar los datos" . mysqli_error($conexion);
    }
?>