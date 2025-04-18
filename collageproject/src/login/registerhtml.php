<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #footer-msg {
            color: green;
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="register.php" method="POST">
                <div id="form-header">
                    <p>Create new account</p>
                    <h2>Register</h2>
                </div>
                <div id="input-field">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div id="form-footer">
                    <input type="submit" value="Register" id="formBtn">
                    <div id="footer-option">
                        <a href="loginhtml.php">login now</a>
                        <a href="#">Enjoy our website</a>
                    </div>
                    <p id="footer-msg">
                    <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                    </p>                   
                </div>
            </form>
        </div>
    </div>

    <a href="javascript:history.back()" class="back-button">
        <span class="back-icon"> 🠈</span>
    </a>
    
</body>
</html>