<?php

include "../registration/db.php";

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password,role)
    VALUES('$name','$email','$password','user')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "User added successfully!";
    }
    else{
        echo "Error in adding user";
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
<h1>ADD USER</h1>
    <form method = "POST">
       <label for="name">Name</label><br>
       <input type="text" name="name" id="name"><br>

       <label for="email">Email</label><br>
       <input type="email" name="email" id="email"><br>

       <label for="password">Password</label><br>
       <input type="password" name = "password"><br><br>

       <button type = "submit" name = "add">Add user</button>
    </form>
</body>
</html>