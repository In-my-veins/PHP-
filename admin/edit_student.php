<?php

include "../config/config.php";
include "../includes/auth.php";

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);

$user = $result->fetch_assoc();

if(isset($_POST['update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $update = "UPDATE users
               SET fname='$fname',
                   lname='$lname',
                   email='$email'
               WHERE id='$id'";

    if($conn->query($update)){
        header("Location: view_students.php");
        exit();
    }
}

include "../includes/header.php";
?>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Edit Student</h2>

        <input type="text"
               name="fname"
               value="<?php echo $user['fname']; ?>"
               required>

        <input type="text"
               name="lname"
               value="<?php echo $user['lname']; ?>"
               required>

        <input type="email"
               name="email"
               value="<?php echo $user['email']; ?>"
               required>

        <button type="submit" name="update">
            Update Student
        </button>

    </form>

</div>

<?php include "../includes/footer.php"; ?>