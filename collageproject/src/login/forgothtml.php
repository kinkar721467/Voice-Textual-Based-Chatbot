<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="forgot.php" method="POST">
                <div id="form-header">
                    <p>Forgot your account</p>
                    <h2>Forgot now</h2>
                </div>
                <div id="input-field">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div id="form-footer">
                    <input type="submit" value="forgot now" id="formBtn">
                    <div id="footer-option">
                        <a href="registerhtml.php">register now</a>
                        <a href="loginhtml.php">Login now</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <a href="javascript:history.back()" class="back-button">
        <span class="back-icon"> 🠈</span>
    </a>

</body>
</html>