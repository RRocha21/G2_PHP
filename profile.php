<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="description" content="...">

    <title>PEW PEW - Profile</title>
    <link rel="stylesheet" href="css/profile.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kaushan+Script&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>

<body>
    <section id="banner">
        <img src="../images/g2_esports.jpg" class="logo">
        <div class="profile-page">
            <div class="form">
                <div class="profile-form">
                    <p class="text"><em>Profile</em></p>
                    <img src="images/cura.jpg">
                    <input type="text" id="email" placeholder="Email">
                    <input type="text" id="username" placeholder="Username">
                    <input type="text" id="fullname" placeholder="Full Name">
                    <input type="text" id="pwd" placeholder="Password">
                    <button id="btn">Update</button>
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
                    <li><a href="index.php#features">FEATURES</a></li>
                    <li><a href="index.php#service">SERVICES</a></li>
                    <li><a href="index.php#testimonial">TESTIMONIALS</a></li>
                    <li><a href="index.php#footer">MEET US</a></li>
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

</body>

<script type="module" src="src/sign_in.js"></script>

</html>