<?php
session_start(); // Start the session

// Disable caching to ensure fresh data is displayed
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Initialize the session variable if not set
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Student Data</title>
    <?php include ('../layout/style.php'); ?>
    <style>
        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #800000;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Data</h2>

        <?php if (isset($_SESSION['students']) && !empty($_SESSION['students'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Campus</th>
                        <th>Colleges</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['students'] as $student): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['age']); ?></td>
                            <td><?php echo htmlspecialchars($student['gender']); ?></td>
                            <td><?php echo htmlspecialchars($student['course']); ?></td>
                            <td><?php echo htmlspecialchars($student['campus']); ?></td>
                            <td><?php echo htmlspecialchars($student['colleges']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No student data available.</p>
        <?php endif; ?>
    </div>

    <?php include ('../layout/footer.php'); ?>
</body>
</html>
