<?php
    //Clase de conexion a la base de datos
    class Connection{
        private $host = "localhost";
        private $dbname = "barber_db";
        private $username = "root";
        private $password = "root";


        public function connect(){

            try{
                $dns = "mysql:host={$this->host};dbname={$this->dbname}";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                return new PDO($dns, $this->username, $this->password, $options);

            } catch (\Throwable $th) {
                echo "Error en la base de datos: " . $th->getMessage();
                exit;
            }
        }
    }
?>