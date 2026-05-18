<?php 

include 'config.php';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users(fname, lname, email, password, gender)
            VALUES ('$fname', '$lname', '$email', '$password', '$gender')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
}

?>