<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="../images/logo.png">
    <title>Login por roles</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">Inicia sesion</div>
        <form action="InicioSesion/inicioSesion.php" method="POST">
            <div class="field">
                <input type="text" required name="username">
                <label>Correo</label>
            </div>
            <div class="field">
                <input type="password" required name="password">
                <label>Contrasena</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Recordar</label>
                </div>
                <div class="pass-link"><a href="#">Olvido su contrasena?</a></div>
            </div>
            <div class="field">
                <input type="submit" value="Ingresar">
            </div>
            <div class="signup-link"><a href="registrarse.php">Registrarse Ahora</a></div>
        </form>
    </div>
</body>

</html>
