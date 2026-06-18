<?php

include "auth_middleware.php";

if($user['role'] != 'admin'){

    die(json_encode([
        "status" => "error",
        "message" => "Access denied"
    ]));
}
?>