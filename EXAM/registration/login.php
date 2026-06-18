<?php 

include "db.php";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM USERS where
         email = '$email' AND 
         password = '$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);

    if($user['role'] == "admin"){
       header("Location: ../admin/dashboard.php");
    }

    if($user['role'] == "user"){
        header("Location: ../user/dashboard.php");        
    }
}
else{
    echo "Wrong email or password";
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

<h1>Login</h1>
    <form method = "POST">
       <label for="email">Email</label><br>
       <input type="email" name="email" id="email"><br>

       <label for="password">Password</label><br>
       <input type="password" name = "password"><br><br>

       <button type = "submit" name = "login">Login</button><br>
       <a href="register.php">Don't have account? Sign up</a>
    </form>
</body>
</html>