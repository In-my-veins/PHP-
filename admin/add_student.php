<?php

include "../config/config.php";
include "../includes/auth.php";

if(isset($_POST['add'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fname,lname,email,password,role)
            VALUES('$fname','$lname','$email','$password','student')";

    if($conn->query($sql)){
        header("Location: view_students.php");
        exit();
    }else{
        echo "Error adding student";
    }
}

include "../includes/header.php";
?>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Add Student</h2>

        <input type="text" name="fname" placeholder="First Name" required>

        <input type="text" name="lname" placeholder="Last Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="add">Add Student</button>

    </form>

</div>

<?php include "../includes/footer.php"; ?>