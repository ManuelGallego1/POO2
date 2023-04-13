<?php 

    require_once("POO.php");
    $int=308;
    $double=1.333;
    $String = "HOLA MUNDO";
    $cadena = new Poo();
    $cadena->tipo_variable($int,$double,$String);
    $cadena->extraer($String);
    $cadena->numero3($int,$double);
