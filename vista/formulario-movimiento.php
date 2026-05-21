<?php
require_once("xampp/controlador/base-de-datos.php");
require_once("xampp/modelo/movimiento.php");

if (isset($_POST["cantidad"])
    && isset($_POST["periodicidad_del_movimiento"])
    && isset($_POST["fecha_del_movimiento"]))
    {
        $cantidad = $_POST["cantidad"];
        $periodicidaddelMovimiento = $_POST["periodicidad_del_movimiento"];
        $fechaDelMovimiento = DateTime::createFromFormat
        ('Y-m-d', $_POST["fecha_del_movimiento"]);

        $movimiento = new Movimiento($cantidad, $periodicidaddelMovimiento, $fechaDelMovimiento);
        InsertarMovimiento ($movimiento, "movimientos", $pdo);
    }
?>



<form method= "POST" action="index.php">
    <br><br>
    Cantidad: <input type="text" name="cantidad"/>
    Periodicidad del movimiento: <input type="text" name="periodicidad_del_movimiento"/>
    Fecha del movimento: <input type="date" name="fecha_del_movimiento"/>
    <br>
    <br>
    <button type="submit"> Consultar </button></form>
    <br><br>