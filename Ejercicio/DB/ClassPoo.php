<?php


class Process
{

    public function Insertar($Nom, $Ape, $Cc, $Num, $Sal)
    {
        include_once("conexion.php");
        $insert = mysqli_query($mysqli, "Insert into Cuentas values('$Nom','$Ape',$Cc,$Num,$Sal)");
        header("location:../home.php");
    }

    public function Traspaso($cuent1, $cuent2, $saldo)
    {
        include_once("conexion.php");
        $buscar_cuent1 = mysqli_query($mysqli, "Select * from Cuentas WHERE Num_cuenta = $cuent1");
        if (mysqli_num_rows($buscar_cuent1) > 0 || mysqli_num_rows($buscar_cuent1) > 0) {
            $fila = mysqli_fetch_assoc($buscar_cuent1);
            $valor = $fila['Saldo'];
            $saldo1 = intval($valor);
            if ($saldo1 >= $saldo) {
                $ope = $saldo1 - $saldo;
                $update = mysqli_query($mysqli, "UPDATE Cuentas SET Saldo = $ope WHERE Num_cuenta = $cuent1");
                $buscar_cuent2 = mysqli_query($mysqli, "Select * from Cuentas WHERE Num_cuenta = $cuent2");
                $fila2 = mysqli_fetch_assoc($buscar_cuent2);
                $valor2 = $fila2['Saldo'];
                $saldo2 = intval($valor2);
                $ope2 = $saldo2 + $saldo;
                $update = mysqli_query($mysqli, "UPDATE Cuentas SET Saldo = $ope2 WHERE Num_cuenta = $cuent2");
                header("location:../home.php");

            } else {
                echo 'No tiene suficiente saldo';
            }

        } else {
            echo 'La cuenta no existe';
        }

    }

}