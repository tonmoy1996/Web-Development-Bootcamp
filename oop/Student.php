<!-- oop -->

<?php

//oop
// DRY
class Student
{
    public $name;
    public $id;

    function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    function print()
    {
        echo "Name:" . $this->name . " Id:" . $this->id . "<br>";
    }
}

$student1 = new Student("tonmoy", 1);

$student1->print();
?>