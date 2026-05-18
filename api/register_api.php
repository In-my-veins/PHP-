<?php

header("Content-Type: application/json");

include "../config/config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO users(
            fname,
            lname,
            email,
            password,
            role
        )

        VALUES(
            '$fname',
            '$lname',
            '$email',
            '$password',
            'student'
        )";

if($conn->query($sql)){

    echo json_encode([
        "status" => "success",
        "message" => "Registration successful"
    ]);

}else{

    echo json_encode([
        "status" => "error",
        "message" => "Registration failed"
    ]);
}
?>