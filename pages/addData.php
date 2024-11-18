<?php
session_start();  // Start the session at the very top

// Initialize the students session array if it's not set
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $campus = $_POST['campus'];
    $colleges = $_POST['colleges'];

    // Store the student data in the session
    $_SESSION['students'][] = [
        'name' => $name,
        'age' => $age,
        'gender' => $gender,
        'course' => $course,
        'campus' => $campus,
        'colleges' => $colleges
    ];

    // Redirect to showdata.php
    header("Location: showdata.php");
    exit();  // Always call exit() after header redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <?php include ('../layout/style.php'); ?>
    <style>
        /* Form container and styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #800000;
            color: #ffffff;
            padding: 20px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-container h2 {
            margin: 0 0 15px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #ffd700;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"], .form-container input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #ffd700;
            color: #800000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .form-container button:hover {
            background-color: #e0c200;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Student Information</h2>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>

            <label for="campus">Campus:</label>
            <input type="text" id="campus" name="campus" required>

            <label for="colleges">Colleges:</label>
            <input type="text" id="colleges" name="colleges" required>

            <button type="submit">Add Student</button>
        </form>
    </div>
    <?php include ('../layout/footer.php'); ?>
</body>
</html>
