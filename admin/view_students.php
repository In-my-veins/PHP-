<?php

include "../config/config.php";
include "../includes/auth.php";
include "../includes/header.php";

$sql = "SELECT * FROM users WHERE role='student'";
$result = $conn->query($sql);

?>

<div class="dashboard">

    <h2>All Students</h2>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td>
                <?php echo $row['fname'] . " " . $row['lname']; ?>
            </td>

            <td><?php echo $row['email']; ?></td>

            <td>

                <a href="edit_student.php?id=<?php echo $row['id']; ?>">
                    Edit
                </a>

                |

                <a href="delete_student.php?id=<?php echo $row['id']; ?>">
                    Delete
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

<?php include "../includes/footer.php"; ?>