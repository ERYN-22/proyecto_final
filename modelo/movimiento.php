<?php
class Movimiento

{
    public string $id;
    public string $cantidad;
    public int $periodicidad;
    public Date $fecha;

    public function __construct(string $id, 
                                string $cantidad, 
                                int $periodicidad, 
                                DateTime $fecha )

    {
        $this->id = $id;
        $this->cantidad = $cantidad;
        $this->periodicidad = $periodicidad;
        $this->fecha = $fecha;
    }


}

?>