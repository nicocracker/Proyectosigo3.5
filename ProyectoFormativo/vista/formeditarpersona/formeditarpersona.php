<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../CSS/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <title>Editar Persona</title>
</head>

<body>
    <?php
    include('../../modelo/conexion.php');

    // Verifica la conexión
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $id = $_GET['editado'] ?? null;

    
    if ($id !== null) {
        $sql = "SELECT * FROM usuario WHERE idUsuario = " . $id;

    
        $resultado = mysqli_query($conexion, $sql);

        if (!$resultado) {
            die("Error SQL: " . mysqli_error($conexion)); // ← error exacto de MySQL
        }

        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            
        } else {
            echo "No se encontró el usuario con ID: " . $id;
        }
    }
    ?>
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
        id="modalSignin">
        <div class="modal-dialog">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0 ">
                    <h1 class="fw-bold mb-0 fs-2 mi-registro-personalizado">Editar Persona</h1>

                    <a href="../../vista/pgprincipal/pgprincipal.php"><button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button></a>

                </div>
                <div class="modal-body p-5 pt-0">


                    <div class="modal-body p-5 pt-0">
                        <form action="../../controlador/editarusuario/editarusuario.php" method="post">
                            <div class="form-floating mb-3">
                                <select class="form-select mi-cedula-personalizado" name="idrol">
                                    <option value="1" placeholder="rol">Asesor</option>
                                    <option value="2">Encuestado</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingInput" name="nombre"
                                    value="<?php echo $fila['Nombre'] ?? ''; ?>" placeholder="Nombre" />
                                <label for="floatingInput">Nombre
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Apellido" name="apellido"
                                    value="<?php echo $fila['Apellido'] ?? ''; ?>" />
                                <label for="floatingPassword">Apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Teléfono" name="telefono"
                                    value="<?php echo $fila['Telefono'] ?? ''; ?>" />
                                <label for="floatingPassword">Teléfono</label>
                            </div>
                            <div class="form-floating mb-3">
                                <!--  <input type="text" class="form-control rounded-3" id="floatingPassword"
                                placeholder="Dirección" name="dire"> -->
                                <input type="text" id="" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Dirección" name="dire" value="<?php echo $fila['Direccion'] ?? ''; ?>">

                                <label for="floatingPassword">Dirección</label>

                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingInput" name="correo"
                                    placeholder="name@example.com" value="<?php echo $fila['Correo'] ?? ''; ?>" />
                                <label for="floatingInput">Correo Electrónico
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword"
                                    placeholder="Password" name="contrasena"
                                    value="<?php echo $fila['Contrasena'] ?? ''; ?>" />
                                <label for="floatingPassword"> Nueva contraseña</label>
                            </div>

                            <!--    <div class="form-floating mb-3">
                           <select name="tipo" class="form-select mi-cedula-personalizado" name="tipo">
                            <option value="asesor">Asesor</option>
                            <option value="encuestado">Encuestado</option>
                        </select>
                        </div> -->
                            <div class="form-floating mb-3">
                                <select class="form-select mi-cedula-personalizado" name="tipodoc">
                                    <option value="CC">Cédula</option>
                                    <option value="TI">Tarjeta de identidad</option>
                                    <option value="CE">Cedula Extranjera</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingPassword"
                                    name="numdocumento" value="<?php echo $fila['NumDocumento'] ?? ''; ?>" />
                                <label for="floatingPassword">Documento de Identidad</label>
                            </div>



                            <button  class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
                                Enviar
                            </button>

                            <hr class="my-4" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>