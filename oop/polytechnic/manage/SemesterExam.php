<?php
require dirname(__FILE__) . '/../abstract/Exam.php';
class SemesterExam extends Exam
{
    public function examTime()
    {
        // TODO: Implement examTime() method.
        $this->examDate = '2020-03-10';
        return $this->startExam();

    }
}