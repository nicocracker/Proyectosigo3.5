<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form action="../../controlador/editarusuario/editarusuario.php" method="POST"></form>
    <div class="container mt-3">
        <h2>Listado de personas ingresadas</h2>
        <p>Personas</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Tipo de Documento</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('../../modelo/conexion.php');
                $datos_usuario = "SELECT * FROM usuario";
                $resultado = mysqli_query($conexion, $datos_usuario);
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    /* Aquí muestra los datos consultados */
                    echo "<tr>";
                    echo "<td>" . $fila["NumDocumento"] . "</td>";
                    echo "<td>" . $fila["Nombre"] . "</td>";
                    echo "<td>" . $fila["Apellido"] . "</td>";
                    echo "<td>" . $fila["Telefono"] . "</td>";
                    echo "<td>" . $fila["Correo"] . "</td>";
                    echo "<td>" . $fila["TipoDocumento"] . "</td>";
                    echo "<td>" . $fila["Direccion"] . "</td>";
                    echo "<td>
                           <a href='../formeditarpersona/formeditarpersona.php?editado=" . $fila['idUsuario'] . "' class='btn btn-warning'>Editar</a>
                          </td>";
                        


                    echo "</tr>";
                }

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>