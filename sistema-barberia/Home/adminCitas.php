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
$sql = "SELECT cita.id_cita, cita.nombre, cita.apellidos, cita.telefono, cita.id_servicio, cita.id_barbero, cita.fecha, cita.hora, cita.confirmada,
        servicio.nombre AS  servicio_nombre,
        barbero.nombre AS barbero_nombre
        FROM cita
        INNER JOIN servicio ON cita.id_servicio = servicio.id_servicio 
        INNER JOIN barbero ON cita.id_barbero = barbero.id_barbero;";
$stmt = $pdo->query($sql);
$oppointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Citas Admin</title>
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
            <div class="header-title">
                <h2>Citas</h2>
                <input type="submit" value="Generar cita" class="btn-agregar-cita">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre cliente</th>
                        <th>Telefono</th>
                        <th>Servicio</th>
                        <th>Barbero</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Confirmada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($oppointments as $oppointment): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($oppointment['id_cita']); ?></td>
                            <td><?php echo htmlspecialchars($oppointment['nombre']); ?> <?php echo htmlspecialchars($oppointment['apellidos']);?></td>
                            <td><?php echo htmlspecialchars($oppointment['telefono']); ?></td>
                            <td><?php echo htmlspecialchars($oppointment['servicio_nombre']); ?></td>
                            <td><?php echo htmlspecialchars($oppointment['barbero_nombre']); ?></td>
                            <td><?php echo htmlspecialchars($oppointment['fecha']); ?></td>
                            <td><?php echo htmlspecialchars($oppointment['hora']); ?></td>
                            <td><?php echo htmlspecialchars($oppointment['confirmada']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
