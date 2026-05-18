<?php

include "../config/config.php";
include "../includes/auth.php";

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$id'";

if($conn->query($sql)){
    header("Location: view_students.php");
    exit();
}else{
    echo "Delete failed";
}
?>