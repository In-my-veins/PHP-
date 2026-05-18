<?php
include "../includes/auth.php";
requireStudent();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="form-container">

    <div class="form-box">

        <h2>Student Dashboard</h2>

        <p>Welcome Student 🎓</p>

        <a href="../resources/notes.php">View Notes</a><br><br>
        <a href="../resources/download.php">Download Resources</a><br><br>
        <a href="profile.php">My Profile</a><br><br>
        <a href="../logout.php">Logout</a>

    </div>

</div>

</body>
</html>