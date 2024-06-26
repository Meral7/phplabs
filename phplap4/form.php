<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

echo 'Connected successfully<br>';

if (isset($_POST['submit'])) {
    // Retrieve and sanitize inputs
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $stat = isset($_POST['mail']) && $_POST['mail'] == 'on' ? 'yes' : 'no';

    $sql = "INSERT INTO user (Name, Email, Gender, MailStatus) VALUES ('$name', '$email', '$gender', '$stat')";
    $retval = mysqli_query($conn, $sql);

    if (!$retval) {
        die('Could not insert to table: ' . mysqli_error($conn));
    }

    echo "<br>Data inserted to table successfully\n";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data into Database</title>
</head>
<body>
    <h2>Insert Data into Database</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tbody>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="text" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td><label>Receive mail from us:</label></td>
                    <td><input type="checkbox" id="mail" name="mail"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="cancel">
    </form>
</body>
</html>

<?php
mysqli_close($conn);
?>
