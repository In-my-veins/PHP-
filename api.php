<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include "config.php";

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {

    // 🔵 READ (GET)
    case 'GET':

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
            $user = mysqli_fetch_assoc($result);

            echo json_encode($user);

        } else {

            $result = mysqli_query($conn, "SELECT * FROM users");

            $users = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }

            echo json_encode($users);
        }

        break;

    // 🟢 CREATE (POST)
    case 'POST':

        $data = json_decode(file_get_contents("php://input"), true);

        $name = $data['name'];
        $email = $data['email'];

        mysqli_query($conn, "INSERT INTO users(name, email) VALUES('$name', '$email')");

        echo json_encode(["message" => "User created successfully"]);

        break;

    // 🟡 UPDATE (PUT)
    case 'PUT':

        $data = json_decode(file_get_contents("php://input"), true);

        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];

        mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");

        echo json_encode(["message" => "User updated successfully"]);

        break;

    // 🔴 DELETE (DELETE)
    case 'DELETE':

        $id = $_GET['id'];

        mysqli_query($conn, "DELETE FROM users WHERE id=$id");

        echo json_encode(["message" => "User deleted successfully"]);

        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
}

?>