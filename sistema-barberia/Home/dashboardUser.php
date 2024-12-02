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
    <title>Dashboard de Administrador</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <link rel="icon" href="../images/logo.png">
</head>
<body>
    <div class="sidebar">
        <h1 style="font-size: 30px;">Hola, <?php echo $_SESSION['username']; ?></h1>
        <a href="../Home/dashboardUser.php">Inicio</a>
        <a href="../registrarse.php">Agregar Usuario</a>
        <a href="../Home/adminCitas.php">Citas</a>
        <a href="">Correo</a>
        <a href="">Barberos</a>
        <a href="">Horarios</a>
        <a href="../InicioSesion/cerrarSesion.php">Cerrar sesión</a>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
        </div>
        <div class="user-list">
            <h2>Lista de Usuarios</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Usuario</th>
                        <th>Correo</th>
                        <th>Tipo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['id_usuario']); ?></td>
                            <td><?php echo htmlspecialchars($user['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($user['correo']); ?></td>
                            <td><?php echo htmlspecialchars($user['tipo']); ?></td>
                            <th><a href="update.php?id=<?=$$user['id_usuario']?>" class="users-table--edit btn">Editar</a></th>
                            <th><a href="delete_user.php?id=<?=$user['id_usuario']?>" class="users-table--delete btn" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
