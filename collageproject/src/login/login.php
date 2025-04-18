<?php
session_start(); 
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetching name and status now
    $query = "SELECT name, status FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['mode'] = $row['status']; // This now works

        header("Location: ../frontPage/index.php");
        exit();
    } else {
        $_SESSION['msg'] = "Invalid email or password.";
        header("Location: loginhtml.php");
        exit();
    }
}
?>
