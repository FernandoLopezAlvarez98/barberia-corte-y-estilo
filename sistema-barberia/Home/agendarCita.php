<?php
// Conectar a la base de datos
require_once '../config/conection.php';
$connection = new Connection();
$pdo = $connection->connect();

// Obtener la lista de servicios
$sql = "SELECT id_servicio, nombre, precio, descripcion FROM servicio;";
$stmt = $pdo->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Obtner lista de barbeross
$sql = "SELECT id_barbero, nombre, especialidad FROM barbero;";
$stmt = $pdo->query($sql);
$barbers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corte y Estilo</title>
    <link rel="stylesheet" href="../css/index_styles.css">
    <link rel="stylesheet" href="../css/agendar_cita.css">
    <link rel="icon" href="../images/logo.png">
</head>
<body>
<header>
        <div class="logo">
            <a href="../index.php"><img src="../images/logo.png" alt="Logo Barbería"></a>
            <span>Corte y Estilo</span>
        </div>
        <nav>
            <a href="../index.php">INICIO</a>
            <a href="#">QUIÉNES SOMOS</a>
            <a href="#s">SERVICIOS</a>
            <a href="../InicioSesion/enviarCorreo.php">GALERÍA</a>
            <a href="agendarCita.php">RESERVAR CITA</a>
            <div class="btns">
                <a href="../iniciarSesion.php" class="btn-iniciar-sesion" style="color: #fff; font-size: 14px;">Iniciar sesión</a>
                <a href="../registrarse.php" class="btn-registrarse" style="color: #fff; font-size: 14px;">Registrarse</a>
            </div>
        </nav>
    </header>


    <section class="hero">
        <h1>AGENDA TU CITA Y DISFRUTA LO BUENO</h1>
        <p>"Que tengas un día tan bonito como tu pelo"</p>
    </section>

    <section class="contact-form">
        <h2>Formulario de Contacto</h2>
        <p>Déjenos saber sus preguntas, sugerencias o preocupaciones llenando el formulario de contacto debajo.</p>
        <p><strong>FECHA Y HORA DE ATENCIÓN LUNES A DOMINGO DE: 9 AM-8 PM</strong></p>
        <form action="../InicioSesion/agendarCita.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre completo*</label>
                <input type="text" id="nombre" placeholder="Nombre(s)" name="nombre">
                <input type="text" placeholder="Apellidos" name="apellido">
            </div>
            <div class="form-group" >
                <label for="email">Email*</label>
                <input type="email" id="email" placeholder="Correo electrónico" name="correo">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono*</label>
                <input type="tel" id="telefono" placeholder="### ### ####" name="telefono">
            </div>
            <div class="form-group">
                <label for="mensaje">Asunto del mensaje*</label>
                <textarea id="mensaje" rows="4" placeholder="Escriba su mensaje aquí" name="mensaje"></textarea>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha">
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora">
            </div>
            <div class="form-group">
                <label for="servicio">Seleccione su servicio</label>
                <select name="servicio" id="" style="font-size: 18px;">
                    <?php foreach ($services as $service): ?>
                            <option value="<?php echo htmlspecialchars($service['id_servicio']);?>">
                                <strong><?php echo htmlspecialchars($service['nombre']);?></strong> - $<?php echo htmlspecialchars($service['precio']);?>
                            </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="barbero">Barbero</label>
                <select name="barbero" id="" style="font-size: 18px;">
                    <?php foreach ($barbers as $barber): ?>
                            <option value="<?php echo htmlspecialchars($barber['id_barbero']);?>">
                                <?php echo htmlspecialchars($barber['nombre']);?> - Especialidad:
                                <?php echo htmlspecialchars($barber['especialidad']);?>
                            </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <input class="btn-submit" type="submit" value="Agendar cita">
            </div>
        </form>
    </section>
</body>
</html>
