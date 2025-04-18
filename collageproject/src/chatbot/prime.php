<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatBot</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/27f616e48f.js" crossorigin="anonymous"></script>
    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body>
    <div class="app">
        <div class="container">
            <!-- ----------nav-bar---------- -->
             <div class="nav">
                <div class="nav-bar">
                    <div id="nav-bar-left">
                        <div class="logo">
                            <h3><span> Krish 2.0</span></h3>
                        </div>
                        <div class="left-select">
                            <select id="nav-select">
                                <option value="Flash2.0">Flash 2.0</option>
                                <option value="DeepThinking" selected>DeepThinking</option>
                            </select>
                        </div>
                    </div>
                    <div id="nav-bar-right">
                        <button type="button" id="mode"><i class="fa-solid fa-moon"></i></button>
                        <?php
                            if(isset($_SESSION['name'])) {
                                $val = $_SESSION['name'][0];
                                echo '<button type="button" id="profile"><b>'.$val.'</b></button>';
                                } else {
                                echo '<button type="button" id="profile"><i class="fa-solid fa-user"></i></button>';
                            }
                        ?>
                    </div>
                </div>
             </div>
            <!-- -----------App Header---------- -->
            <div class="app-header">
                <h1 class="heading">Hello <i class="fa-regular fa-hand"></i>, 
                <?php
                    if(isset($_SESSION['name'])) {
                        echo $_SESSION['name'];
                        } else {
                        echo 'Guest';
                    }
                ?>
            </h1>
                <h2 class="sub-heading">How can I help you Today?</h2>
            </div>
            <!-------------Suggestions------------>
            <div class="suggestion-container">
                <div class="suggestion-box suggestion-1">
                    <p>Design a home office setup for remote work under $500 Rs.</p>
                    <div class="icon-sugg">
                        <span><i class="fa-solid fa-pen-to-square"></i></span>
                    </div>
                </div>
                <div class="suggestion-box suggestion-2">
                    <p>how can i level up my web development expertise in 2025?</p>
                    <div class="icon-sugg">
                        <span><i class="fa-solid fa-lightbulb"></i></span>
                    </div>
                </div>
                <div class="suggestion-box suggestion-3">
                    <p>Suggest some useful tools for debugging javascript code.</p>
                    <div class="icon-sugg">
                        <span><i class="fa-solid fa-head-side-virus"></i></span>
                </div>
                </div>
                <div class="suggestion-box suggestion-4">
                    <p>Create a React js compononent for the simple todo list app.</p>
                    <div class="icon-sugg">
                        <span><i class="fa-solid fa-code"></i></span>
                </div>
                </div>
            </div>

            <!-- ---------------------msg------------------------ -->
             <div class="container-form">
                <div id="loader" class="loader" style="display:none;">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>                  
             </div>

            <!-- ---------------Chat Box----------------- -->
            <div class="chat-input">

                <div class="input-box">
                    <input type="text" placeholder="ask anything" id="main-input" required>
                    <button type="button" id="send-btn"><i class="fa-solid fa-arrow-up"></i></button>
                </div>

                <div id="chatmic">
                    <button type="button" id="micInput"><i class="fa-solid fa-microphone-lines"></i></button>
                </div>

                <div class="aichat">
                    <button type="button" id="aiChatBtn"><i class="fa-solid fa-message"></i></button>
                </div>

                <div class="aiTools">
                    <button type="button" id="aiToolBtn"><i class="fa-solid fa-download"></i></button>
                </div>


            </div>

        </div>
    </div>

    <a href="../frontPage/" class="back-button">
        <span class="back-icon"> 🠈</span>
    </a>

    <script src="main.js"></script>
    <script src="jason.js"></script>
</body>
</html>