<?php 
require_once '../config/conection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Obtner datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $manseaje = $_POST['mensaje'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    //Para validar en la base de datos
    $servicio = $_POST['servicio'];
    $barbero = $_POST['barbero'];
    //Confimarción de cita en falso por defect0
    $confirmada = 0;

    //Guardar citan en la base de datos
    try{
        $connection = new Connection();
        $pdo = $connection->connect();

        $sql = "INSERT INTO cita(id_barbero,id_servicio, fecha, hora, confirmada, nombre, apellidos, correo, telefono, mensaje) 
                            VALUES (:barbero, :servicio, :fecha, :hora, :confirmada, :nombre, :apellidos,:correo, :telefono, :mensaje)";

        $stmt = $pdo -> prepare($sql);

        //Ejecutar la consulta
        $stmt -> execute([
                'barbero' => $barbero,
                'servicio' => $servicio,
                'fecha' => $fecha,
                'hora' => $hora,
                'confirmada' => $confirmada,
                'nombre' => $nombre,
                'apellidos' => $apellido,
                'correo' => $correo,
                'telefono' => $telefono,
                'mensaje' => $manseaje,
        ]);

        echo "
        <script>
            alert('Su cita fue registrada exitosamente');
            window.location.href = '../Home/agendarCita.php'; //Redirigir al login u otra pagina 
        </script>";
        
    } catch(\Throwable $th){
        echo "
        <script>
            alert('Error al registrar cita: " . addslashes($th->getMessage()) . "');
            //window.location.href = '../registrarse.php'; //Redirigir al registro
        </script>";
    }

}
?>