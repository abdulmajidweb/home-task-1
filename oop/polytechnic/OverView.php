<?php
require dirname(__FILE__) . '/manage/Institute.php';
require dirname(__FILE__) . '/trait/Department.php';
require dirname(__FILE__) . '/trait/Student.php';
class OverView extends Institute
{
    use Department, Student;
    public function __construct()
    {
        echo 'Institute Name: ' . self::INSTITUTENAME . '<br/>';
        echo 'Teacher is : ' . $this->teacher(50) . '<br/>';
        echo 'Student is : ' . $this->student(4000) . '<br/>';
    }
}