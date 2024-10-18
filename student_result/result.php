<?php
function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid<br>";
            return;
        }
        if ($mark < 33) {
            echo "Failed due to scoring less than 33 in one or more subjects.<br>";
            return;
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);
    
    switch (true) {
        case $averageMarks >= 80:
            $grade = 'A+';
            break;
        case $averageMarks >= 70:
            $grade = 'A';
            break;
        case $averageMarks >= 60:
            $grade = 'A-';
            break;
        case $averageMarks >= 50:
            $grade = 'B';
            break;
        case $averageMarks >= 40:
            $grade = 'C';
            break;
        case $averageMarks >= 33:
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $averageMarks<br>";
    echo "Grade: $grade<br>";
}

$marks = [80, 85, 78, 90, 82];
calculateResult($marks);
?>
