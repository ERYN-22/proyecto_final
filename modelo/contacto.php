<?php
class Usuario

{
    public string $id;
    public string $nombre;
    public string $apellido;
    public string $telefono;

    public function __construct(string $id,
                                 string $nombre, 
                                 string $apellido, 
                                 string $relefono)

            {
                $this->id = $id;
                $this->nombre = $nombre;
                $this->apellido = $apellido;
                $this->telefono = $telefono;
            }                     
}
 ?>