<?php

header("Content-Type: application/json");

include "../config/config.php";
include "../jwt/generate_token.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows == 1){

    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){

        $token = generateJWT($user);

        echo json_encode([
            "status" => "success",
            "token" => $token,
            "role" => $user['role']
        ]);

    }else{

        echo json_encode([
            "status" => "error",
            "message" => "Wrong password"
        ]);
    }

}else{

    echo json_encode([
        "status" => "error",
        "message" => "User not found"
    ]);
}
?>