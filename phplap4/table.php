<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div><span style="font-size:larger;margin-right: 50%;">USER DETAILS</span><span><button style="background-color:green"><a href="./form.php">add new user</a></button></span></div>
    <hr><br>
    <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'user';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if(! $conn) {
        die('Could not connect: ' . mysqli_connect_error($conn));
    }

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    // Check if there are rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1' style = 'width:80%;margin:10px auto;'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mail status</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["Id"]."</td>";
            echo "<td>".$row["Name"]."</td>";
            echo "<td>".$row["Email"]."</td>";
            echo "<td>".$row["Gender"]."</td>";
            echo "<td>".$row["MailStatus"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    ?>
</body>
</html>