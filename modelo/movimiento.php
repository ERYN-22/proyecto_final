<?php
class Movimiento

{
    public string $id;
    public int $cantidad;
    public string $periodicidadDelMovimento;
    public DateTime $fechaDelMovimiento;

    public function __construct(int $cantidad, 
                                string $periodicidadDelMovimento, 
                                DateTime $fechaDelMovimiento)

    {
        $this->cantidad = $cantidad;
        $this->periodicidadDelMovimiento = $periodicidadDelMovimento;
        $this->fechaDelMovimiento = $fechaDelMovimiento;
    }

    public function FechaDelMovimientoATexto() : string
    {
        return $this->fechaDelMovimiento->format("%d/%m/%y");
    }
}

?>