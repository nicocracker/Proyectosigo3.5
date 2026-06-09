<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../../CSS/iniciosesion.css">
<!--     <link rel="stylesheet" href="../CSS/iniciosesion.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("../../modelo/conexion.php");
    ?>
    <div>

    </div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="../../img/Gemini_Generated_Image_9orqzs9orqzs9orq-Photoroom.png" alt="" width="100" height="70">
            <a class="navbar-brand" href="javascript:void(0)"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Contáctenos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 "></div>
            <div class="col-2">
                <main class="form-signin w-100 m-auto d-flex justify-content-center align-items-center min-vh-100">
                    <form action="../../controlador/iniciosesion/iniciosesion.php" method="post">
                        <img class="mb-4"
                            src="../../img/png-clipart-united-states-avatar-organization-information-user-avatar-service-computer-wallpaper-thumbnail-Photoroom.png  "
                            alt="" width="200" height="200" />
                        <p class="bienve-1">Bienvenido a Sigo</p>
                        <h1 class="h3 mb-3 fw-normal">Por favor, Inicie Sesión</h1>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" name="correo"
                                placeholder="name@example.com" />
                            <label for="floatingInput">Correo Electrónico</label>
                           
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="contrasena" placeholder="Password" />
                            <label for="floatingPassword">Contraseña</label>
                        
                        </div>
                        <div class="form-check text-start my-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault" />
                            <label class="form-check-label" for="checkDefault">
                                Recuerdame
                            </label>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mi-boton-personalizado"  type="submit">
                         Ingresar
                        </button>
                        <a href="">¿Olvido su Contraseña?</a>

                        <a class="registroper" href="../../vista/registrarpersonas/registrarpersonas.php">¿No está registrado?, Registrate

                        </a>

                    </form>
                </main>
            </div>
            <div class="col-5 "></div>
        </div>
    </div>

    <div class="contain-prin">

    </div>



    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"
                    aria-label="Bootstrap">
                    <svg class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">
                    <p class="text-foot">&copy 2026 SIGO COMPANY </p>
                </span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-body-secondary" href="#" aria-label="Instagram"><svg class="bi" width="24"
                            height="24" aria-hidden="true">
                            <use class="insta" xlink:href="#instagram"></use>
                        </svg></a>
                </li>
                <li class="ms-3">
                    <a class="text-body-secondary" href="#" aria-label="Facebook"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a>
                </li>
            </ul>
        </footer>
    </div>

</body>

</html>