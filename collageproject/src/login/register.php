<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check for duplicate email
    $duplicateCheck = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $duplicateCheck);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['msg'] = "Email already exists!";
        header("Location: registerhtml.php");
        exit();
    } else {
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($conn, $query)) {
            $_SESSION['msg'] = "Registered successfully!";
            header("Location: registerhtml.php");
            exit();
        } else {
            $_SESSION['msg'] = "Error: " . mysqli_error($conn);
            header("Location: registerhtml.php");
            exit();
        }
    }

} else {
    $_SESSION['msg'] = "Invalid request.";
    header("Location: registerhtml.php");
    exit();
}
?>
