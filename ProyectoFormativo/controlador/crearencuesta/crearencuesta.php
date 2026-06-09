<?php

    include("../../modelo/conexion.php");
    $FechaCreacion=$_POST["FechaCreacion"];
    $Estado=$_POST["Estado"];
    $Soporte=$_POST["Soporte"];
    $NivelSocioeconomico=$_POST["NivelSocioeconomico"];

    $sql = "INSERT INTO encuesta(FechaCreacion,Estado,Soporte,NivelSocioeconomico)
    VALUES ('$FechaCreacion','$Estado','$Soporte','$NivelSocioeconomico')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        header("location: ../../vista/crearencuesta/crearencuesta.php");
    }else{
        echo"Error al insertar datos" . mysqli_error($conexionbd);
    }

?>