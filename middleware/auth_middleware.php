<?php

include "../jwt/verify_token.php";

$headers = getallheaders();

if(!isset($headers['Authorization'])){

    die(json_encode([
        "status" => "error",
        "message" => "No token provided"
    ]));
}

$token = str_replace(
    "Bearer ",
    "",
    $headers['Authorization']
);

$user = verifyJWT($token);

if(!$user){

    die(json_encode([
        "status" => "error",
        "message" => "Invalid token"
    ]));
}
?>