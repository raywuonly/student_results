<?php
$student_name = $_POST['student_name'];
$student_grade = $_POST['student_grade'];

$file = fopen('results.xlsx', 'a');
fwrite($file, $student_name . ', ' . $student_grade . "\n");
fclose($file);
?>
