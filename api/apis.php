<?php 

header("Content-Type: Application/json");
header("Access-Contol-Allow-Origin: *");

include "config.php";

$method = $_SERVER['REQUEST_METHOD']

switch($method){
    case: 'GET'
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn,"SELECT * FROM users where id = $id");
        mysqli_fetch_assoc($result);

        echo json_encode($user)
    }
    else{
        $result = ($conn,"SELECT * FROM users ");

        $users = [];
         mysqli_query($row = mysqli_query_fetch($result)){
            $users[] = $row;
        }
        echo json_encode($users)
    }
}

case: 'POST';
$data = json_decode(file_get_contents("php://input"),true);

$name = $data['name'];
$email = $data['email'];

$result = mysqli_query($conn,"INSERT INTO users (name,email) values('$name','$email')")

echo json_encode("mesage")

?>