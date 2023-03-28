<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sardines Basement</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
    <div class="main">
        <!--NAVBAR STARTS HERE-->
        <div class="navbar">
            <!--ICON ENDS HERE-->
            <div class="icon">
                <h2 class="logo"><a href="login.php">Basement</a></h2>
            </div>
            <!--ICON ENDS HERE-->

            <!--MENU STARTS HERE-->
            <div class="menu">
                <ul>
                    <li><a href="login.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <!--MENU ENDS HERE-->

        </div> 
        <!--NAVBAR ENDS HERE-->

        <!--CONTENT STARTS HERE-->
        <div class="content">
            <h1>SARDINES <span>BASEMENT</span></h1>
                <h3><br>Welcome to the basement!</h3>
                <p class="par"><br>Welcome to the sardines basement! We play<br>
                    lots of games, everyday. Interact with fellow streamers <br>
                    and supporters too! Everyone's POG.
                    Don't forget <br>
                    to create your account and interact with your fellow <br>
                    sardines.</p>

                <!--FORM STARTS HERE-->
                <div class="form">
                <form action="login-check.php" method="post">
                    <h2>Login Here</h2>
                    <input type="text" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="password" placeholder="Enter Password Here" required>
                    <button type="submit" class="btnn" name="login">Login</button>

                    <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

                    <p class="link">Don't have an account?<br>
                    <a href="index.php" class="ca">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <!--ICONS STARTS HERE-->
                    <div  class="icons">
                        <a href="https://www.instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.twitch.tv"><ion-icon name="logo-twitch"></ion-icon></a>
                        <a href="https://www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://www.tiktok.com"><ion-icon name="logo-tiktok"></ion-icon></a>
                    </div>
                    <!--ICONS ENDS HERE-->

                </div>
                </form>
                <!--FORM ENDS HERE-->
            </div>
        <!--CONTENT ENDS HERE-->
            </div>
    <!--MAIN ENDS HERE-->
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>