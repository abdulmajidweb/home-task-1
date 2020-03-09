<?php
trait Student
{
    public $studentName;
    public $roll;
    public function studentDetails($studentName, $roll)
    {
        $this->studentName = $studentName;
        $this->roll = $roll;
        return 'Student Name: ' . $this->studentName . ' and Roll: ' . $this->roll . '<br/>';
    }
}