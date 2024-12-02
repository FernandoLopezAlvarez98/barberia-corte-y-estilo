<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['email']) || $_SESSION['role_id'] != 1) { // Suponiendo que el rol de secretaria es 2
    #echo "".$_SESSION['email'];
    header("Location: ../index.php");
    exit();
}

// Conectar a la base de datos
require_once '../config/conection.php';
$connection = new Connection();
$pdo = $connection->connect();

// Obtener la lista de usuarios
$sql = "SELECT usuario.id_usuario, usuario.correo, usuario.nombre, tipo_usuario.tipo
        FROM usuario
        INNER JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.id_tipo_usuario;";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <!--CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <link rel="icon" href="../images/logo.png">
    <!-- Incluir SweetAlert desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="sidebar">
        <h1 style="font-size: 30px;">Hola, <?php echo $_SESSION['username']; ?></h1>
        <a href="../Home/dashboardUser.php">Inicio</a>
        <a href="../Home/registrarseAdmin.php">Agregar Usuario</a>
        <a href="../Home/adminCitas.php">Citas</a>
        <a href="">Correo</a>
        <a href="">Barberos</a>
        <a href="">Horarios</a>
        <a href="../InicioSesion/cerrarSesion.php">Cerrar sesión</a>
    </div>
    <div class="wrapper">
        <div class="title">Registro</div>
        <form action="../InicioSesion/registrarseAdmin.php" method="POST">
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
                </select>
                <label for="role_id">Rol</label>
            </div>
            <div class="field">
                <input type="submit" value="Registrar">
            </div>
            <!--
            <div class="signup-link">
                ¿Ya tienes cuenta? <a href="iniciarSesion.php">Iniciar sesión</a>
            </div>
            -->
        </form>
    </div>
</body>

</html>

