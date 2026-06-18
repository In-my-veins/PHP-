<?php

include "../registration/db.php";


$sql = "SELECT * FROM users";


$result = mysqli_query($conn,$sql);


?>


<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


<h1>All Users</h1>


<table border="1">

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>

</tr>


<?php


while($user = mysqli_fetch_assoc($result)){


?>

<tr>

<td><?php echo $user['id']; ?></td>

<td><?php echo $user['name']; ?></td>

<td><?php echo $user['email']; ?></td>

<td><?php echo $user['role']; ?></td>


</tr>


<?php

}

?>


</table>


</body>
</html>