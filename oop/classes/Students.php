<?php

/**
 * Class Students
 */
class Students
{
    /**
     * @var $studentName
     * @var $department
     */
    public $studentName;
    public $department;

    /**
     * @param $studentName
     * @param $department
     */
    public function studentDetails($studentName, $department)
    {
        $this->studentName = $studentName;
        $this->department = $department;
    }
}

/**
 * Object of Students class
 */
$student = new Students();
$student->studentDetails('Abdul Majid', 'Computer');

if ($student instanceof Students){
    echo 'My name is : ' . $student->studentName . ' and Department is: ' . $student->department;
}