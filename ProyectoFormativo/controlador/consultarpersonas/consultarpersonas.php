<?php
    include("../../modelo/conexion.php");
    $NumDocumento = $_POST['NumDocumento'];

    $sql = "SELECT
            u.idUsuario,
            u.NumDocumento,
            nf.idNucleoFamiliar,
            nf.idEncuesta,
            e.idEncuesta AS encuesta_encontrada
        FROM usuario u INNER JOIN nucleofamiliar nf ON u.idUsuario = nf.idUsuario
                       INNER JOIN encuesta e ON nf.idEncuesta = e.idEncuesta
        WHERE u.NumDocumento = '$NumDocumento'";

    $resultado = mysqli_query($conexion, $sql);

include("../../vista/consultarpersona/resultadoConsulta.php");
    

?>
