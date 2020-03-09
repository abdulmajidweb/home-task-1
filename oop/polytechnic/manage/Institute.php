<?php
require dirname(__FILE__) . '/../interface/Polytechnic.php';
class Institute implements Polytechnic
{
    public $teachers;
    public $students;
    const INSTITUTENAME = 'Kurigram Polytechnic Institute';
    public function teacher($teachers)
    {
        return $this->teachers = $teachers;
    }
    public function student($students)
    {
        return $this->students = $students;
    }
}