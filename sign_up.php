<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta name="keywords" content="HTML, CSS"> -->
    <!-- <meta name="description" content="..."> -->

    <title>G2 - SignUP</title>
    <link rel="stylesheet" href="css/sign_up_styles.css" />
    <!-- <script type="module" src="src/sign_up.php"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kaushan+Script&display=swap" rel="stylesheet">

    <!-- <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script> -->


</head>

<body>

    <section id="banner">
        <img src="images/g2_esports.png" class="logo">
        <img src="images/twitch_logo.png" class="logo_twitch">
        <img src="images/x_logo.png" class="logo_x">
        <div class="login-page">
            <div class="form">
                <div class="register-form">
                    <form action = "includes/signup.inc.php" method = "post">
                        <p class="text"><em>Registration</em></p>
                        <input type="text" name="name" placeholder="Full Name">
                        <input type="text" name="email" placeholder="Email">
                        <input type="text" name="username" placeholder="Username" />
                        <input type="password" name="pwd" placeholder="Password" />
                        <input type="password" name="pwd_repeat" placeholder="Confirm Password" />
                        <button type="submit" name="submit">Create</button>
                        <p class="message"> Already Registered?
                            <a href="sign_in.php"> <em>Log in</em></a>
                        </p>
                    </form>
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p class='error'>Fill in all fields!</p>";
                            }
                            else if ($_GET["error"] == "invaliduid") {
                                echo "<p class='error'>Choose a proper username!</p>";
                            }
                            else if ($_GET["error"] == "invalidemail") {
                                echo "<p class='error'>Choose a proper email!</p>";
                            }
                            else if ($_GET["error"] == "passwordsdontmatch") {
                                echo "<p class='error'>Passwords don't match!</p>";
                            }
                            else if ($_GET["error"] == "usernametaken") {
                                echo "<p class='error'>Username is already taken!</p>";
                            }
                            else if ($_GET["error"] == "stmtfailed") {
                                echo "<p class='error'>Something went wrong, try again!</p>";
                            }
                            else if ($_GET["error"] == "none") {
                                echo "<p class='error'>You have signed up!</p>";
                            }
                        }else{
                            echo "<p class='error'></p>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="banner-btn">
            <a href="index.php#features">Find Out</a>
            <a href="index.php#footer">Read More</a>
        </div>

        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="index.php#banner">HOME</a></li>
                    <li><a href="sign_in.php">SIGN IN</a></li>
                    <li><a href="sign_up.php">SIGN UP</a></li>
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="images/menu_btn.png" id="menu">
        </div>
    </section>

    
    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        sideNav.style.right = "-250px";
        menuBtn.onclick = function() {
            if (sideNav.style.right == "0px") {
                sideNav.style.right = "-250px";
                menu.src = "images/menu_btn.png";
            } else {
                sideNav.style.right = "0px";
                menu.src = "images/close_btn.png";
            }
        }
    </script>

    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>

    <script type="module" src="src/sign_up.php"></script>

</body>

</html>