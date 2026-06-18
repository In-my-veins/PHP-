<?php

include "../registration/db.php";

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users
    SET name = '$name', email = '$email',password = '$password',role = 'user'
    where id = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "User updated successfully!";
    }
    else{
        echo "Error in updating user";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>ADD USER</h1>
    <form method = "POST">

       <label for="id">Id</label><br>
       <input type="text" name="id" id="id"><br>

       <label for="name">Name</label><br>
       <input type="text" name="name" id="name"><br>

       <label for="email">Email</label><br>
       <input type="email" name="email" id="email"><br>

       <label for="password">Password</label><br>
       <input type="password" name = "password"><br><br>

       <button type = "submit" name = "edit">Edit user</button>
    </form>
</body>
</html>