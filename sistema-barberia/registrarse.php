<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <!--CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <!-- Incluir SweetAlert desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">Registro</div>
        <form action="InicioSesion/registrarse.php" method="POST">
            <div class="field">
                <input type="text" id="username" name="username" required>
                <label for="username">Nombre de usuario</label>
            </div>
            <div class="field">
                <input type="password" id="password" name="password" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="field">
                <input type="email" id="email" name="email" required>
                <label for="email">Correo</label>
            </div>
            <div class="field">
                <input type="tel" id="phone" name="phone" required>
                <label for="phone">Teléfono</label>
            </div>
            <div class="field">
                <select id="role_id" name="role_id" required>
                    <option value="1">Administrador</option>
                    <option value="2">Barbero</option>
                    <option value="3">Cliente</option>
                    <!-- Ajusta los valores según los roles disponibles en tu base de datos -->
                </select>
                <label for="role_id">Rol</label>
            </div>
            <div class="field">
                <input type="submit" value="Registrar">
            </div>
            <div class="signup-link">
                ¿Ya tienes cuenta? <a href="iniciarSesion.php">Iniciar sesión</a>
            </div>
        </form>
    </div>
</body>

</html>

