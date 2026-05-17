<?php

header("Content-Type: application/json");

include "../config/config.php";

$sql = "SELECT id,fname,lname,email,role FROM users";

$result = $conn->query($sql);

$users = [];

while($row = $result->fetch_assoc()){

    $users[] = $row;
}

echo json_encode($users);
?>