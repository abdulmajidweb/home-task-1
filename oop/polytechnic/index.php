<?php
require dirname(__FILE__) . '/OverView.php';
require dirname(__FILE__) . '/manage/SemesterExam.php';
$overView = new OverView();
$semesterExam = new SemesterExam();


echo $overView->studentDetails('Abdul Majid', 308260);

echo $overView->computer();

echo 'Semester Final Exam Date: ' . $semesterExam->examTime() . '<br/>';