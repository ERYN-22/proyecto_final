<?php
function MostrarPlantilla(string $nombreDePlantilla,
                          array $data = [])

{
    extract($data);
    require("xampp/vista/plantillas/$nombreDePlantilla.php");
}
 ?>