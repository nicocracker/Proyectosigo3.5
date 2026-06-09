<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Consulta</title>
    <link rel="stylesheet" href="../CSS/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
            <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="../pgprincipal/pgprincipal.php" class="nav-link px-2 link-secondary">Inicio</a>
                    </li>
                    <li>
                        <a href="../../vista/crearencuesta/formcrearencuesta.php" class="nav-link px-2 link-body-emphasis" class="crear-encuesta">Crear Encuesta</a>
                    </li>
                    <li>
                        <a href="formconsultarpersona.php" class="nav-link px-2 link-body-emphasis">Consultar usuario</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-body-emphasis">Editar Perfil de Usuario</a>
                    </li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search" />
                </form>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../img/usuario.png" alt="mdo" width="32" height="32" class="rounded-circle" />
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">Ajustes</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="./iniciosesion.html">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">

        <h1 class="text-center">RESULTADO DE LA CONSULTA</h1>

        <?php

        if($resultado && mysqli_num_rows($resultado) > 0){

            echo "<table class='table table-bordered'>";

            echo "<tr>
                    <th>ID Usuario</th>
                    <th>Documento</th>
                    <th>ID Núcleo Familiar</th>
                    <th>ID Encuesta</th>
                </tr>";

            while($fila = mysqli_fetch_assoc($resultado)){

                echo "<tr>";

                echo "<td>".$fila['idUsuario']."</td>";
                echo "<td>".$fila['NumDocumento']."</td>";
                echo "<td>".$fila['idNucleoFamiliar']."</td>";
                echo "<td>".$fila['idEncuesta']."</td>";

                echo "</tr>";
            }

            echo "</table>";

        }else{

            echo "<div class='alert alert-danger'>
                    No se encontraron registros.
                </div>";
        }

        ?>

        <a href="formconsultarpersona.php" class="btn btn-primary">
            Volver
        </a>

    </div>

</body>
</html>
