<?php
abstract class Exam
{
    public $examDate;
    public function startExam()
    {
        return $this->examDate;
    }
    abstract  public function examTime();
}