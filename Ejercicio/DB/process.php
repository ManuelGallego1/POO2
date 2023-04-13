<?php 

if(isset($_POST['nom'])){
    include_once("ClassPoo.php");
    $Nom = $_POST['nom'];
    $Ape = $_POST['ape'];
    $Cc  = $_POST['cc'];
    $Num = $_POST['num'];
    $Sal = $_POST['saldo'];
    $register = New Process();
    $register -> Insertar($Nom,$Ape,$Cc,$Num,$Sal);
}

if(isset($_POST['cuent1'])){
    include_once("ClassPoo.php");
    $cuent1 = $_POST['cuent1'];
    $cuent2 = $_POST['cuent2'];
    $saldo  = $_POST['saldo'];
    $update = New Process();
    $update -> Traspaso($cuent1,$cuent2,$saldo);
}