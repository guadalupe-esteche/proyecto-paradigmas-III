<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Registro/Iniciar Sesión</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="../estilos/responsive.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/contacto.js" ></script>
</head>

<body>
    <header class="header-contacto">
        <h1>Contacto</h1>
    </header>

    <nav>
        <ul class="menu-horizontal">
            <li>
                <a href="../index.html">Inicio</a>
            </li>
            <li>
                <a href="explorar.html">Explorar</a>
            </li>
            <li>
                <a href="contacto.html">Contacto</a>
            </li>
        </ul>
    </nav>

    <main>
        <section id="formulario">
            <h2>Regístrate o Inicia Sesión</h2>

            <!-- Formulario de Inicio de Sesión -->
            <div id="login-form">
                <h3>Iniciar Sesión</h3>
                <form method="post" action="login.php">
                    <label for="login_email">Correo Electrónico:</label>
                    <input type="email" id="login_email" name="login_email" required placeholder="E-mail">

                    <label for="login_password">Contraseña:</label>
                    <input type="password" id="login_password" name="login_password" required placeholder="Contraseña">

                    <button type="submit">Iniciar Sesión</button>
                    <p>¿No tienes cuenta? <a href="#" id="show-registro">Regístrate aquí</a></p>
                </form>
            </div>

            <!-- Formulario de Registro -->
            <div id="registro-form" style="display: none;">
                <h3>Regístrate</h3>
                <form method="post" action="registro.php">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Nombre">

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required placeholder="E-mail">

                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="password" name="password" required placeholder="Contraseña">

                    <button type="submit">Registrarse</button>
                </form>
                <p id="error-mensaje" style="display: none;">La contraseña debe tener al menos 8 caracteres y contener
                    al menos un número o un carácter especial /^(?=.*[0-9!@#$%^&*])/</p>
                <p>¿Ya tienes cuenta? <a href="#" id="show-login">Inicia Sesión aquí</a></p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mi Blog de Películas</p>
    </footer>
</body>

</html>