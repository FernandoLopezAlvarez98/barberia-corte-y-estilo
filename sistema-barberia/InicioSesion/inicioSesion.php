<?php

require_once '../config/conection.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Obtener datos
    $username = $_POST['username'];
    $password = $_POST['password'];
    try {
        $conection = new Connection();
        $pdo = $conection->connect();

        $sql = "SELECT * FROM usuario WHERE correo = :correo";
        $stsm = $pdo->prepare($sql);
        $stsm-> execute(['correo' => $username]);
        $user = $stsm->fetch(PDO::FETCH_ASSOC);

        //Hacer validaciones de credenciales
        if ($user && password_verify($password,$user['password'])){
            //Variable de sesión
            $_SESSION['user_id'] = $user['id_usuario']; //'user_id'
            $_SESSION['email'] = $user['correo']; //'user_id'
            $_SESSION['username'] = $user['nombre']; //'user_id'
            $_SESSION['role_id'] = $user['id_tipo_usuario']; //'user_id'

            //
            if ($user['id_tipo_usuario'] == 1){
                Header('Location: ../Home/dashboardUser.php');
            } elseif($user['id_tipo_usuario'] == 3) {
                Header('Location: ../Home/dashboard.php');
            } else {
                echo "Acceso denegado";
            }
            exit();
        }else{
            $error_message = 'Credenciales incorrectas';
        }

    } catch (\Throwable $th){
        echo "Error de conexión: " . $th->getMessage();
        exit();
    }
}


?>