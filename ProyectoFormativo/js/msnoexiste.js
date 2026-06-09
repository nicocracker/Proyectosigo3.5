document.getElementById('ProyectoFormativo').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que la página se recargue

    // Capturamos los datos del formulario
    const formData = new FormData(this);

    // Enviamos los datos a PHP usando fetch
    fetch('iniciosesion.php', {
        method: 'POST',
        body: formData
    })

    $pdo = new PDO("mysql:host=$db_servidor;dbname=$db_nombre;charset=utf8", $correo_persona,$contrasena_persona);
    .then(response => response.json()) // Convertimos la respuesta de PHP a JSON
    .then(data => {
        const contenedorMensaje = document.getElementById('mensaje');
        
        if (data.status === 'error') {
            // Si PHP dice que no existe, mostramos el mensaje de error
            contenedorMensaje.innerHTML = `<p style="color: red; font-weight: bold;">${data.message}</p>`;
        } else if (data.status === 'success') {
            // Si existe, puedes redireccionarlo o mostrar éxito
            contenedorMensaje.innerHTML = `<p style="color: green; font-weight: bold;">${data.message}</p>`;
            // window.location.href = 'dashboard.php'; // Ejemplo de redirección
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});