<?php

require_once '../config/conection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Obtner datos del formulario
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role_id = $_POST['role_id'];

    //Ingresar datos a la base de datos
    try{
        $connection = new Connection();
        $pdo = $connection->connect();

        $sql = "INSERT INTO usuario(nombre, correo, telefono, id_tipo_usuario, password) 
                            VALUES (:username, :email, :phone, :role_id, :password)";

        $stmt = $pdo -> prepare($sql);

        //Ejecutar la consulta
        $stmt -> execute([
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'role_id' => $role_id,
                'password' => $password,
        ]);

        echo "
        <script>
            alert('Usuario registrado correctamente');
            window.location.href = '../index.php'; //Redirigir al login u otra pagina 
        </script>";
        
    } catch(\Throwable $th){
        echo "
        <script>
            alert('Error al registrar al usuario: " . addslashes($th->getMessage()) . "');
            window.location.href = '../registrarse.php'; //Redirigir al registro
        </script>";
    }

}
