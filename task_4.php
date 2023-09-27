<?php
/*
Task 4: Multidimensional Array
Create a multidimensional array called $studentGrades to store the grades of three students.
Each student has grades for three subjects: Math, English, and Science. Write a PHP function
which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

$studentGrades = [
    'Monir' => ['Math' => 55, 'English' => 9, 'Science' => 8],
    'Aleef' => ['Math' => 90, 'English' => 88, 'Science' => 94],
    'Nasrina' => ['Math' => "110", 'English' => 101, 'Science' => -35],
];

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $key => $value) {
        $errorMarks = [];
        foreach ($value as $subject => $marks) {
            if ($marks < 0 || $marks > 100) {
                $errorMarks[] = "$subject: $marks";
            }
        }

        if (!empty($errorMarks)) {
            echo "<========== $key ==========>\n";
            echo "Check your Marks\n\n";
            echo "Wrong inputs are following: \n";
            echo implode("\n", $errorMarks) . "\n\n";
            continue;
        }

        $average = number_format(array_sum($value) / count($value), 2);

        if ($average <= 100 && $average >= 80) {
            $grade = "A+";
        } elseif ($average < 80 && $average >= 70) {
            $grade = "A";
        } elseif ($average < 70 && $average >= 60) {
            $grade = "A-";
        } elseif ($average < 60 && $average >= 50) {
            $grade = "B";
        } elseif ($average < 50 && $average >= 40) {
            $grade = "C";
        } elseif ($average < 40 && $average >= 33) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<========== $key ==========>\n";
        echo "Average Marks: $average\n";
        echo "Grade: $grade\n\n";
    }
}
calculateAverageGrades($studentGrades);
