<?php
include "../includes/auth.php";
requireAdmin();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="form-container">

    <div class="form-box">

        <h2>Admin Dashboard</h2>

        <p>Welcome Admin 👨‍💼</p>

        <a href="add_student.php">Add Student</a><br><br>
        <a href="view_students.php">View Students</a><br><br>
        <a href="../logout.php">Logout</a>

    </div>

</div>

</body>
</html>