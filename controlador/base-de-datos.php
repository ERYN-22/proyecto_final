<?php
function ConectarBaseDeDatos(string $ubicacion, 
                             string $nombreDeLaBaseDeDatos, 
                             string $usuario, 
                             string $password): PDO
                 
            {
                $dsn = "mysql:host=$ubicacion;dbname=$nombreDeLaBaseDeDatos;charset=utf8mb4";

                $pdo = new PDO($dsn, $usuario, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,


                ]);
            
            return $pdo;
            }
                $ubicacion = "localhost";
                $nombreDeLaBaseDeDatos = "gestor_de_gastos";
                $usuario = "root";
                $password = "";

                $pdo = ConectarBaseDeDatos($ubicacion, $nombreDeLaBaseDeDatos, $usuario, $password);
            
                function ConsultarTablaCompleta(PDO $pdo, string $nombreDeLatabla)
                {
                    $sql = "SELECT * FROM $nombreDeLatabla";

                    return $pdo->query($sql)->fetchAll();

                }

                function InsertarMovimiento(Movimiento $movimiento, 
                                               string $nombreDeLatabla,
                                               PDO $pdo)
                                               {
                                                $fecha = $movimiento->FechaDelMovimientoATexto();
                                                $sql = "INSERT INTO $nombreDeLatabla (cantidad, periodicidad, 
                                                fecha)".  
                                                "VALUES(\"$movimiento->cantidad\", \"$movimiento->periodicidadDelMovimiento\",
                                                \"$fecha\")";

                                                $pdo->exec($sql);
                                               }


?>
