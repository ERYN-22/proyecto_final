<?php
class Historial

{
    public $movimientos;
    


public function __construct(movimientos ...$movimientos )
{
    $this->movimientos = $movimientos;
}
}
?>