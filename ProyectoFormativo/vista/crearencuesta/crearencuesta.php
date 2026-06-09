<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <title>CREAR ENCUESTAS</title>
</head>
<body>
    <?php
    include("../../modelo/conexion.php");
    ?>
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
                        <a href="../vista/crearencuesta/formcrearencuesta.php" class="nav-link px-2 link-body-emphasis" class="crear-encuesta">Crear Encuesta</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-body-emphasis">Consultar usuario</a>
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
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle" />
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
    <div class="container">
        <div class="row"> <!-- Primera fila de la regilla -->
            <div class="col"></div> <!-- Columna 1 -->
            <div class="col"> <!-- Columna 2 -->
                <form action="../controlador/crearencuesta/crearencuesta.php" method="post">
                    <h1>CREAR ENCUESTAS</h1>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Fecha y Hora</label>
                        <input type="datetime-local" class="form-control" name="FechaCreacion">
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Estado del usuario</label>
                        <input type="select" class="form-control" name="Estado">
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Soporte</label>
                        <input type="select" class="form-control" name="Soporte">
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Nivel Socioeconomico</label>
                        <input type="select" class="form-control" name="NivelSocioeconomico">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col"></div> <!-- Columna 3 -->
        </div>
    </div>
</body>
</html>