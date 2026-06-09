<?php

    include("../../modelo/conexion.php");
    $correo_persona=$_POST["correo"];
    $contrasena_persona=$_POST["contrasena"];

    $sql="SELECT u.Correo,
        u.contrasena,
        r.Nombre,
        u.nombre AS nomusuario
    FROM usuario u inner join rol r on (r.idRol=u.idRol)  
    WHERE contrasena = '". $contrasena_persona."' AND correo='".$correo_persona ."' ";

    /* echo $sql; */
    $resultado=mysqli_query($conexion, $sql);
   
    if(mysqli_num_rows($resultado) > 0){
        $fila=mysqli_fetch_assoc($resultado); 
        echo "Bienvenido " . $fila['nomusuario']; 
        header("location: ../../vista/pgprincipal/pgprincipal.php");
    }else{ 
        echo "No existe esta persona" . mysqli_error($conexion);
    }
    



?>