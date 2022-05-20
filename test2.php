<?php
// Description:

// Write a program to check student grade based on the marks using if-else statement.

// Conditions:

// If marks are 60% or more, grade will be First Division.
// If marks between 45% to 59%, grade will be Second Division.
// If marks between 33% to 44%, grade will be Third Division.
// If marks are less than 33%, student will be Fail.
function studentGrades ($grade)
{
    switch($grade){
        case $grade >= 60:
        echo "First Division";
        break;

        case $grade >= 45 && $grade <= 59:
        echo "Second Division";
        break;

        case $grade >= 33 && $grade <= 44:
        echo "Third Division";
        break;

        case $grade < 33:
        echo "Fail";
        break;

        default:
        echo "No case";
    }
}
studentGrades(55);
?>