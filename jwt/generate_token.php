<?php

function generateJWT($user){

    $header = json_encode([
        "typ" => "JWT",
        "alg" => "HS256"
    ]);

    $payload = json_encode([
        "id" => $user['id'],
        "email" => $user['email'],
        "role" => $user['role'],
        "exp" => time() + 3600
    ]);

    $base64Header = str_replace(
        ['+', '/', '='],
        ['-', '_', ''],
        base64_encode($header)
    );

    $base64Payload = str_replace(
        ['+', '/', '='],
        ['-', '_', ''],
        base64_encode($payload)
    );

    $secret = "MY_SECRET_KEY";

    $signature = hash_hmac(
        'sha256',
        $base64Header . "." . $base64Payload,
        $secret,
        true
    );

    $base64Signature = str_replace(
        ['+', '/', '='],
        ['-', '_', ''],
        base64_encode($signature)
    );

    return $base64Header . "." .
           $base64Payload . "." .
           $base64Signature;
}
?>