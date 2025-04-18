<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "login_system");

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $status = $_POST['status'];

    // Check if email exists
    $checkQuery = "SELECT * FROM users WHERE email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Email exists, update status
        $updateQuery = "UPDATE users SET status = '$status' WHERE email = '$email'";
        if (mysqli_query($conn, $updateQuery)) {
            header("Location: ../login/loginhtml.php");
            exit;
        } else {
            $msg = "❌ Error updating status.";
        }
    } else {
        $msg = "❗ Email not found in the database.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0F1725;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .msg {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Make User Prime</h2>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="status">Status:</label>
        <select name="status">
            <option value="prime">Prime Member</option>
        </select>

        <button type="submit">Update</button>

        <?php if (!empty($msg)): ?>
            <div class="msg"><?= $msg ?></div>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
