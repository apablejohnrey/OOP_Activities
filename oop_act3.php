<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Student Information Records</h1>

    <!-- Table to display student records -->
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Course and Year</th>
            <th>Enrolled</th>
            <th>Subject</th>
            <th>Grade</th>
        </tr>
        <!-- Student 1 -->
        <tr>
            <td id="fname_1"></td>
            <td id="mname_1"></td>
            <td id="lname_1"></td>
            <td id="age_1"></td>
            <td id="course_1"></td>
            <td id="enrolled_1"></td>
            <td id="subject_1"></td>
            <td id="grade_1"></td>
        </tr>
        <!-- Student 2 -->
        <tr>
            <td id="fname_2"></td>
            <td id="mname_2"></td>
            <td id="lname_2"></td>
            <td id="age_2"></td>
            <td id="course_2"></td>
            <td id="enrolled_2"></td>
            <td id="subject_2"></td>
            <td id="grade_2"></td>
        </tr>
        <!-- Student 3 -->
        <tr>
            <td id="fname_3"></td>
            <td id="mname_3"></td>
            <td id="lname_3"></td>
            <td id="age_3"></td>
            <td id="course_3"></td>
            <td id="enrolled_3"></td>
            <td id="subject_3"></td>
            <td id="grade_3"></td>
        </tr>
    </table>

    <!-- JavaScript Section -->
    <script>
        // Function to create student information records
        function createStudentRecord(firstName, middleName, lastName, age, enrolled, subject, grade, studentNumber) {
            const courseYear = "BSIT-2";
            document.getElementById(`fname_${studentNumber}`).innerText = firstName;
            document.getElementById(`mname_${studentNumber}`).innerText = middleName;
            document.getElementById(`lname_${studentNumber}`).innerText = lastName;
            document.getElementById(`age_${studentNumber}`).innerText = age;
            document.getElementById(`course_${studentNumber}`).innerText = courseYear;
            document.getElementById(`enrolled_${studentNumber}`).innerText = enrolled ? 'Yes' : 'No';
            document.getElementById(`subject_${studentNumber}`).innerText = subject;
            document.getElementById(`grade_${studentNumber}`).innerText = grade;
        }

        // Student 1 Information
        createStudentRecord("John Rey", "Amado", "Apable", 20, true, "IT ELECT 03-OOP", 92.1, 1);

        // Student 2 Information
        createStudentRecord("Rea", "Biglain", "Buates", 20, false, "IT ELECT 03-OOP", 92.1, 2);

        // Student 3 Information
        createStudentRecord("Angelique", "Magbiro", "Secretario", 19, true, "IT ELECT 03-OOP", 92.1, 3);
    </script>
</body>
</html>
