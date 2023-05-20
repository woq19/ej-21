<?php

require_once 'modelo/datospersona.php';

$p = new DatosPersona();

$p->Nombre = 'Walter';
$p->Apellido = 'Quintana';
$p->Mail = 'walteroscarquintana456@gmail.com';
$p->Edad = 27;

$p->MostrarPropiedades();