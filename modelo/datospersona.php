<?php

class DatosPersona
{
    public $Nombre;
    public $Apellido;
    public $Mail;
    public $Edad;

    public function MostrarPropiedades()
    {
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Mail: ' . $this->Mail . '<br>';
        echo 'Edad: ' . $this->Edad . '<br>';
    }
}