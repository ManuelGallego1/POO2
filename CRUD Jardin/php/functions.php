<?php


if (isset($_POST['submit_add'])) {
    include_once("ClassPoo.php");
    $student = new Student();
    $attendant = new Attendant();

    $name = $_POST['name'];
    $name2 = $_POST['name2'];

    $firstsur = $_POST['fne'];
    $firstsur2 = $_POST['fna'];
    $secondsur = $_POST['sne'];
    $secondsur2 = $_POST['sna'];

    $ti  = $_POST['ti'];
    $cc = $_POST['cc'];

    $group = $_POST['gr'];
    $birthdate = $_POST['date'];
    $phone = $_POST['ph'];



    $student->Setters($name, $firstsur, $secondsur, $ti, $group, $birthdate);
    $attendant->Setters2($name2, $firstsur2, $secondsur2, $cc, $phone, $ti);

    $student->create();
    $attendant->create();
}

if (isset($_POST['ti_delete'])) {
    $ti=$_POST['ti_delete'];
    include_once("ClassPoo.php");
    $student = new Student();
    $student->delete($ti);

}


if(isset($_POST['submit_update'])) {
    include_once("ClassPoo.php");
    $id=$_POST['id'];
    $student = new Student();
    $attendant = new Attendant();

    $name = $_POST['name'];
    $name2 = $_POST['name2'];

    $firstsur = $_POST['fne'];
    $firstsur2 = $_POST['fna'];
    $secondsur = $_POST['sne'];
    $secondsur2 = $_POST['sna'];

    $ti  = $_POST['ti'];
    $cc = $_POST['cc'];

    $group = $_POST['gr'];
    $birthdate = $_POST['date'];
    $phone = $_POST['ph'];



    $student->Setters($name, $firstsur, $secondsur, $ti, $group, $birthdate);
    $attendant->Setters2($name2, $firstsur2, $secondsur2, $cc, $phone, $ti);
    $student->update($id);
    $attendant->update($id);
}

