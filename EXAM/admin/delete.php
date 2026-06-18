<?php

include "../registration/db.php";


$id = $_GET['id'];


$sql = "DELETE FROM users 
        WHERE id=$id";


$result = mysqli_query($conn,$sql);



if($result){

    echo "User deleted successfully";

}
else{

    echo "Error deleting user";

}


?>