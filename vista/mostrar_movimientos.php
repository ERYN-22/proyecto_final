<?php
 $tablaCompleta = ConsultarTablaCompleta($pdo, "movimientos");



 foreach ($tablaCompleta as $movimiento)
 {
    echo "*".$movimiento["cantidad"]."_".$movimiento["periodicidad"]."_".$movimiento["fecha"];
    echo "<br><br>";
 }

?>