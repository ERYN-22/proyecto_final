<?php
class Presupuesto
{
    public string $clave;
    public int $salarioInicial;
    public Historial $historial;

    public function __construct(string $clave, 
                                int $salarioInicial, 
                                Historial $historial)

            {
                $this->clave = $clave;
                $this->salarioInicial = $salarioInicial;
                $this->historial = $historial;
            }
}



?>