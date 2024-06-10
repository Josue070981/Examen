<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="container">
                <h1>CRUD App</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="add.php">Add User</a></li>
                </ul>
            </div>
        </header>

        <?php
        if (isset($_GET['message']) && $_GET['message'] == 'deleted') {
            echo "<p class='success-message'>User deleted successfully.</p>";
        }
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM usuarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["nombre"]. "</td>
                            <td>" . $row["email"]. "</td>
                            <td>" . $row["edad"]. "</td>
                            <td>
                                <a href='edit.php?id=".$row["id"]."'>Edit</a> |
                                <a href='delete.php?id=".$row["id"]."'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
