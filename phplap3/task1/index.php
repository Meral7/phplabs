<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AAST_BIS Class Registration</title>
</head>

<body>
    <h1>Application name: AAST_BIS class registration</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <span style="color:red;">* <?php if (isset($_GET['name_err'])) echo $_GET['name_err']; ?></span>
        <br><br>

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">
        <span style="color:red;">* <?php if (isset($_GET['email_err'])) echo $_GET['email_err']; ?></span>
        <br><br>

        <label for="group">Group #:</label>
        <input type="text" id="group" name="group">
        <br><br>

        <label for="class_details">Class details:</label>
        <textarea id="class_details" name="class_details"></textarea>
        <br><br>

        <label>Gender:</label>
        <input type="radio" id="female" name="gender" value="female">Female
        <input type="radio" id="male" name="gender" value="male">Male
        <span style="color:red;">* <?php if (isset($_GET['gender_err'])) echo $_GET['gender_err']; ?></span>
        <br><br>

        <label for="courses">Select Courses:</label>
        <select id="courses" name="courses[]" multiple>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
        </select>
        <br><br>

        <label for="agree">Agree:</label>
        <input type="checkbox" id="agree" name="agree">
        <span style="color:red;">* <?php if (isset($_GET['agree_err'])) echo $_GET['agree_err']; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>