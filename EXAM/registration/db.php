<?php 

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "exam"
);

if(!$conn){
    die("Database connection failed");
}

?>