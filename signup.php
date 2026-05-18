<?php
include "config/config.php";

$message = "";

if (isset($_POST['signup'])) {

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // check if user exists
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($check->num_rows > 0) {
        $message = "Email already exists!";
    } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fname, lname, email, password, role)
                VALUES ('$fname', '$lname', '$email', '$hashedPassword', 'student')";

        if ($conn->query($sql)) {
            $message = "Account created successfully! Please login.";
        } else {
            $message = "Error creating account.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Create Account</h2>

        <?php if($message != ""): ?>
            <p style="text-align:center; color:green;">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <input type="text" name="fname" placeholder="First Name" required>

        <input type="text" name="lname" placeholder="Last Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="signup">Signup</button>

        <p style="text-align:center; margin-top:10px;">
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </form>

</div>

</body>
</html>