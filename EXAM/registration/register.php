<?php 
    include "db.php";
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(name,email,password,role) VALUES
    ('$name','$email','$password','user')";

    $result = mysqli_query($conn,$sql);

    if(!$conn){
        die("Registration unsuccessful");
    }
    else{
        echo "Registration successful ";
    }
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>SIGN UP</h1>
    <form method = "POST">
       <label for="name">Name</label><br>
       <input type="text" name="name" id="name"><br>

       <label for="email">Email</label><br>
       <input type="email" name="email" id="email"><br>

       <label for="password">Password</label><br>
       <input type="password" name = "password"><br><br>

       <button type = "submit" name = "register">Register</button>
       <a href="login.php">Already have account? login</a>
    </form>
</body>
</html>