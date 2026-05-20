<?php
function ConectarBaseDeDatos(string $ubicacion, 
                             string $nombreDeLaBaseDeDatos, 
                             string $usuario, 
                             string $password): PDO
                 
            {
                $dsn = "mysql:host=$ubicacion;dbname=$nombreDeLaBaseDeDatos;charset=utf8mb4";

                $pdo = new PDO($dns, $ususario, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,


                ]
                );
            } 
            return $pdo;
           
            {
                $ubicacion = "localhost";
                $nombreDeLaBaseDeDatos = "";
                $usuario = "root";
                $password = "";

                $pdo1 = ConectarBaseDeDatos($ubicacion, $nombreDeLaBaseDeDatos, $usuario, $password);
            }
                function ConsultarTablaCompleta(PDO $pdo, string $nombreDeLatabla)
                {
                    $sql = "SELECT * FROM $nombreDeLatabla";

                    return $pdo->query($sql)->fetchAll();

                }

                $respuesta = ConsultarTablaCompleta("Gestor_Gastos");
                foreach ($respuesta as $entrada)
                    {
                        echo $entrada["Gestor_Gastos"];
                    }
            
?>