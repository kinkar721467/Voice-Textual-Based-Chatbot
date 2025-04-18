<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krish 2.0</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/27f616e48f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Krish 2.0</a>
        <div class="hamburger">
            <i class='bx bx-menu' aria-label="Toggle menu"></i>
        </div>
        <nav class="navbar">
            <a href="#" class="active">Home</a>
            <a href="../about_us/index.html">About</a>
            <a href="../service_form/">Service</a>
            <a href="../contact_form/">Contact</a>
            <?php
                if (isset($_SESSION['email'])) {
                    echo '<a href="../login/logout.php" id="loginBtn">Logout</a>';
                } else {
                    echo '<a href="../login/loginhtml.php" id="loginBtn">Login</a>';
                }
            ?>
        </nav>
    </header>
    <section class="home">
        <div class="home-content">
            <h1>Hello, <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "Guest"; ?></h1>
            <h3>An AI chatBot</h3>
            <p>Voice Textual Bot Website is an AI-powered <br> chatbot that allows users to interact via both voice and text.</p>
            <div class="btn-box">
            <?php
                if (isset($_SESSION['name'])) {
                    if (isset($_SESSION['mode']) && $_SESSION['mode'] == "prime") {
                        echo '<a href="../chatbot/prime.php">Free</a>
                            <a href="../chatbot/prime.php">Prime</a>';
                    } else {
                        echo '<a href="../chatbot/index.php">Try Free</a>
                            <a href="../paid_version/index.html">Buy Prime</a>';
                    }
                } else {
                    echo '<a href="../login/loginhtml.php">Try Free</a>
                        <a href="../login/loginhtml.php">Paid Version</a>';
                }
            ?>
            </div>

            </div>
        </div>
        <div class="home-sci">
            <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
            <a href="https://x.com/"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a>
        </div>
        <span class="home-imgHover"></span>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const navbar = document.querySelector('.navbar');

            hamburger.addEventListener('click', () => {
                navbar.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
