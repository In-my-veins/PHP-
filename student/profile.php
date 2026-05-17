<?php
include "../includes/auth.php";
include "../includes/header.php";
?>

<h2>Student Profile</h2>
<p>Name: <?php echo $_SESSION['user_name']; ?></p>

<?php include "../includes/footer.php"; ?>