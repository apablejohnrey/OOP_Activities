<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/act3.css">
    <title>Student Information</title>
</head>
<body>
<?php

function createStudentRecord($formData) {
    $subjects = [
        'Introduction to Computer Science' => 92.1,
        'Information Systems and Database Management' => 92.1,
        'Network Security and Cybersecurity' => 92.1,
    ];

    $studentRecord = [
        'First Name' => $formData['first_name'],
        'Middle Name' => $formData['middle_name'],
        'Last Name' => $formData['last_name'],
        'Age' => $formData['age'],
        'Course and Year' => $formData['course_year'],
        'Enrolled' => $formData['enrolled'],
        'Subjects' => $subjects,
    ];

    return $studentRecord;
}

function displayStudentRecord($studentRecord) {
    echo "<h2>Student Information Record:</h2>";
    foreach ($studentRecord as $key => $value) {
        if ($key === 'Subjects') {
            echo "<h3>$key:</h3>";
            echo "<ul>";
            foreach ($value as $subject => $grade) {
                echo "<li><strong>$subject:</strong> $grade</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>$key:</strong> $value</p>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $student1 = createStudentRecord($_POST);


    displayStudentRecord($student1);
} else {
 
    echo '
    <form method="post" action="">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" name="middle_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="course_year">Course and Year:</label>
        <input type="text" name="course_year" required><br>

        <label for="enrolled">Enrolled? (Yes/No):</label>
        <input type="text" name="enrolled" required><br>

        <input type="submit" value="Submit">
    </form>';
}
?>


</body>
</html>
