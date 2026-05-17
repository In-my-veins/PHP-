<?php
include "includes/auth.php";



requireLogin();

if ($_SESSION['role'] == 'admin') {
    header("Location: admin/admin_dashboard.php");
    exit();
} else {
    header("Location: student/student_dashboard.php");
    exit();
}
?>