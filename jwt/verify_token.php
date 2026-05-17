<?php

function verifyJWT($jwt){

    $secret = "MY_SECRET_KEY";

    $tokenParts = explode('.', $jwt);

    if(count($tokenParts) != 3){
        return false;
    }

    $header = $tokenParts[0];
    $payload = $tokenParts[1];
    $signature = $tokenParts[2];

    $validSignature = str_replace(
        ['+', '/', '='],
        ['-', '_', ''],
        base64_encode(
            hash_hmac(
                'sha256',
                $header . "." . $payload,
                $secret,
                true
            )
        )
    );

    if($signature !== $validSignature){
        return false;
    }

    $decodedPayload = json_decode(
        base64_decode($payload),
        true
    );

    if($decodedPayload['exp'] < time()){
        return false;
    }

    return $decodedPayload;
}
?>