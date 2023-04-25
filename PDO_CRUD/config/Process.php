<?php


include_once('DatabaseProces.php');

if (isset($_POST['submit_login'])) {
   $user = $_POST['user'];
   $pass = $_POST['pass'];



   //instanciar el objeto
   $users = new DatabaseProcess();
   // llamado función de loguin
   $users->login($user, $pass);

   $response = $users->login($user, $pass);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../home.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }
}

if (isset($_POST['submit_add'])) {

   $name = $_POST['name'];
   $name2 = $_POST['name2'];

   $firstsur = $_POST['fne'];
   $firstsur2 = $_POST['fna'];
   $secondsur = $_POST['sne'];
   $secondsur2 = $_POST['sna'];

   $ti  = $_POST['ti'];
   $cc = $_POST['cc'];

   $program = $_POST['program'];
   $birthdate = $_POST['date'];
   $phone = $_POST['ph'];

   $data = [
      "id" => 0,
      "name" => $name,
      "firstsur" => $firstsur,
      "secondsur" => $secondsur,
      "ti" => $ti,
      "program" => $program,
      "date" => $birthdate
   ];

   $data2 = [
      "id" => 0,
      "name" => $name2,
      "firstsur" => $firstsur2,
      "secondsur" => $secondsur2,
      "cc" => $cc,
      "phone" => $phone,
      "dni_son" => $ti
   ];


   $insert = new DatabaseProcess();


   $response = $insert->insertData($data,$data2);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../home.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }
}

if (isset($_POST['submit_delete'])) {

   $id = $_POST['id_delete'];

   $delete = new DatabaseProcess();


   $response = $delete->deleteData($id);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../home.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }

}

if (isset($_POST['submit_update'])) {


   $id = $_POST['id_update'];

   $name = $_POST['name'];
   $name2 = $_POST['name2'];

   $firstsur = $_POST['fne'];
   $firstsur2 = $_POST['fna'];
   $secondsur = $_POST['sne'];
   $secondsur2 = $_POST['sna'];

   $ti  = $_POST['ti'];
   $cc = $_POST['cc'];

   $program = $_POST['program'];
   $birthdate = $_POST['date'];
   $phone = $_POST['ph'];

   $data = [
      "name" => $name,
      "f_surname" => $firstsur,
      "s_surname" => $secondsur,
      "dni" => $ti,
      "program" => $program,
      "birth_date" => $birthdate
   ];

   $data2 = [
      "name" => $name2,
      "f_surname" => $firstsur2,
      "s_surname" => $secondsur2,
      "dni" => $cc,
      "phone" => $phone,
      "dni_son" => $ti
   ];


   $update = new DatabaseProcess();


   $response = $update->updateData($id,$ti,$data,$data2);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../home.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }

}






















