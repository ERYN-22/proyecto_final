<?php
require_once("modelo/historial.php");
require_once("modelo/movimiento.php");
require_once("modelo/presupuesto.php");
require_once("vista/plantillas/herramientas.php");
 ?>
<form action="index.php" method="GET">

<?php
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "historial",
    "nombreInternoDelMenuDesplegable" => "historial",
    "listaDeElementosDeLaTabla" => ["movimientos ..."]    
];
MostrarPlantilla("select", $data);
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "movimiento",
    "nombreInternoDelMenuDesplegable" => "movimiento",
    "listaDeElementosDeLaTabla" => ["id", "cantidad", "periodicidad", "fecha"]
];
MostrarPlantilla("select", $data);
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "presupuesto",
    "nombreInternoDelMenuDesplegable" => "presupuesto",
    "listaDeElementosDeLaTabla" => ["clave", "salarioInicial", "historial"]
];
MostrarPlantilla("select", $data);
 ?>
 <button type="submit">Consultar</button>
</form>
<?php
if (!isset($_GET["historial"])
    || !isset($_GET["movimiento"])
    || !isset($_GET["presupuesto"]))

{
    return;
}

$valorMovimiento = $_GET["historial"];
$valorHistorial = $_GET["movimiento"];
$valorPresupuesto = $_GET["presupuesto"];

echo "Historial: $valorHistorial=> Movimiento: 
                 $valorMovimiento=> Presupuesto: 
                 $valorpresupuesto";

$historialConsulta = new Historial($valorHistorial);
$movimientoConsulta = new Movimiento($valorMovimiento);
$presupuestoConsulta = new Presupuesto($valorMovimiento);
?>