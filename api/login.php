<?php
session_start();
include "config/config.php";

$error = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $login_as = $_POST['login_as'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            if ($user['role'] !== $login_as) {
                $error = "You selected wrong role for this account.";
            } else {

                session_regenerate_id(true);

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['fname'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header("Location: admin/admin_dashboard.php");
                    exit();
                } else {
                    header("Location: student/student_dashboard.php");
                    exit();
                }
            }

        } else {
            $error = "Incorrect password.";
        }

    } else {
        $error = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Login</h2>

        <?php if ($error != ""): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <!-- ROLE SELECT (MODERN UI) -->
        <div class="role-box">

            <label>Select Role</label>

            <div class="role-options">

                <label class="role-card">
                    <input type="radio" name="login_as" value="student" required>
                    <div class="role-content">🎓 Student</div>
                </label>

                <label class="role-card">
                    <input type="radio" name="login_as" value="admin" required>
                    <div class="role-content">👨‍💼 Admin</div>
                </label>

            </div>
        </div>

        <button type="submit" name="login">Login</button>

        <p class="link">
            Don't have an account?
            <a href="signup.php">Signup</a>
        </p>

    </form>

</div>

</body>
</html>