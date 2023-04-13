<?php

class Student
{
    public $name;
    public $firstsur;
    public $secondsur;
    public $ti;
    public $group;
    public $birthdate;

    public $data = [];

    public function Setters($name, $firstsur, $secondsur, $ti, $group, $birthdate)
    {
        $this->name = $name;
        $this->firstsur = $firstsur;
        $this->secondsur = $secondsur;
        $this->ti = $ti;
        $this->group = $group;
        $this->birthdate = $birthdate;

        $this->data = [
        "name" => $name,
        "firstsur" => $firstsur,
        "secondsur" => $secondsur,
        "ti" => $ti,
        "group" => $group,
        "birthdate" => $birthdate
        ];
    }

    public function Getters()
    {
    return $this->data;
    }

    public function create()
    {
        include("connect.php");
        $create = mysqli_query($mysqli, "Insert into student values(0,'$this->name','$this->firstsur','$this->secondsur',$this->ti,'$this->group','$this->birthdate')");
    }

    public function delete($ti)
    {
        include("connect.php");
        $delete = mysqli_query($mysqli, "DELETE FROM attendant WHERE id_son=$ti");
        $delete2 = mysqli_query($mysqli, "DELETE FROM student WHERE ti=$ti");
        header("location:../home.php");
    }

    public function update($id)
    {
        include("connect.php");
        $update = mysqli_query($mysqli, "UPDATE student SET name='$this->name', first_sur='$this->firstsur',second_sur='$this->secondsur',ti=$this->ti,grp='$this->group',birth_date='$this->birthdate' where id=$id");
        header("location:../home.php");
    }


}
class Attendant
{
    public $name2;
    public $firstsur2;
    public $secondsur2;
    public $cc;
    public $phone;
    public $ti;

    public $data2 = [];


    public function Setters2($name2, $firstsur2, $secondsur2, $cc, $phone,$ti)
    {
        $this->name2 = $name2;
        $this->firstsur2 = $firstsur2;
        $this->secondsur2 = $secondsur2;
        $this->cc = $cc;
        $this->phone = $phone;
        $this->ti = $ti;

        $this->data2 = [
            "name" => $name2,
            "firstsur" => $firstsur2,
            "secondsur" => $secondsur2,
            "cc" => $cc,
            "group" => $phone,
            "ti" => $ti
        ];
    }

    public function Getters2()
    {
        return $this->data2;
    }

    public function create()
    {
        include("connect.php");
        $create = mysqli_query($mysqli, "Insert into attendant values(0,'$this->name2','$this->firstsur2','$this->secondsur2',$this->cc,$this->phone,$this->ti)");
        header("location:../home.php");
    }
    
    public function update($id)
    {
        include("connect.php");
        $update = mysqli_query($mysqli, "UPDATE attendant SET name='$this->name2', first_sur='$this->firstsur2',second_sur='$this->secondsur2',cc=$this->cc,phone='$this->phone' where id=$id");
        header("location:../home.php");
    }
    
}
