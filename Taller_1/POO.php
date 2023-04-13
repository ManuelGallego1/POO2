<?php
class Poo
{
    public $int = 0;
    public $double = 0.0;
    public $string = "";
    public $err = "";

    function tipo_variable($int, $double, $string)
    {
        echo gettype($int), "\n"; 
        echo gettype($double), "\n";
        echo gettype($string), "\n";
    }
    function extraer($string)
    {
        if (is_string($string)) {
            if (str_contains($string, 'a')) { 
                echo "Esta cadena de texto contiene A \n";
            } elseif(str_contains($string, 'A'))
            {
                echo "Esta cadena de texto contiene A \n";
            }
            else {
                echo "No contiene ninguna A \n";
            }
        } else {
            $this->err = "No hay ningun caracter A en la cadena";
            echo "NaN \n";
        }
    }
    function numero3($int, $double)
    {
        if (is_numeric($int)) {

            $numnInt = str_split($int); //Volvemos el entero en un array que esta separado numero por numero
            foreach ($numnInt as &$valor) {
                if ($valor == 3) { //Buscamos el valor 3 en el array de losw numeros
                    $miMum = 3;
                }
            }
            if ($miMum === 3) {
                echo "Tiene el num 3 \n";
            } else {
                echo "NO Tiene el num 3 \n";
            }
        } else {
            $this->err = "No hay ningun numero 3";
            return "NaN";
        }

        if (is_double($double)) {

            $sep = str_split($double); // volvemos el doble en un array
            $miMum = 0;
            foreach ($sep as &$valor) { // buscamos en el array hasta que el valor sea igual al array
                if ($valor == 3) { //Encontramos el valor 3 en el array
                    $miMum = 3;
                }
            }
            if ($miMum === 3) {
                echo "Tiene el num 3 \n";
            } else {
                echo "NO Tiene el num 3 \n";
            }
        } else {
            $this->err = "No hay ningun numero 3";
            echo "NaN \n";
        }
    }
}
