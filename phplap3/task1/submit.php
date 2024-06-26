<?php
$name_err = $email_err = $gender_err = $agree_err = "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_err = "Name is required";
        $valid = false;
    }

    if (empty($_POST["email"])) {
        $email_err = "Email is required";
        $valid = false;
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
        $valid = false;
    }

    if (empty($_POST["gender"])) {
        $gender_err = "Gender is required";
        $valid = false;
    }

    if (!isset($_POST["agree"])) {
        $agree_err = "You must agree to terms";
        $valid = false;
    }

    if ($valid) {
        echo "<h2>Your given values are as:</h2>";
        echo "Name: " . $_POST["name"] . "<br>";
        echo "E-mail: " . $_POST["email"] . "<br>";
        echo "Group #: " . $_POST["group"] . "<br>";
        echo "Class details: " . $_POST["class_details"] . "<br>";
        echo "Gender: " . $_POST["gender"] . "<br>";
        echo "Courses: " . implode(", ", $_POST["courses"]) . "<br>";
    } else {
        $url = "index.php?name_err=$name_err&email_err=$email_err&gender_err=$gender_err&agree_err=$agree_err";
        header("Location: $url");
        exit;
    }
}
