<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--START META DATA PAGE DESCRIPTION-->

    <!--END META DATA PAGE DESCRIPTION-->
    <title>Scene This before SIGN UP</title>

    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="index.php" id="branding">
                    <img src="images/logo.png" alt="" class="logo">
                    <div class="logo-copy">
                        <h1 class="site-title">Scene This Before</h1>
                        <small class="site-description"> </small>
                    </div>
                </a>
                <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="movies.php">Movies</a></li>
                        <li class="menu-item"><a href="series.php">TV Series</a></li>
                        <li class="menu-item"><a href="getLocationInfo.php">Locations</a></li>
                        <li class="menu-item"><a href="about.php">About Us</a></li>
                        <li class="menu-item current-menu-item"><a href="signup.php">Sign Up</a></li>
                        <li class="menu-item"><a href="login.php">Log In</a></li>
                    </ul>
                    <!-- .menu -->

                </div>

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a>
                        <span>Sign Up</span>
                    </div>
                    <h2>Sign Up</h2>
                </div>

                <div class="content">
                    <form method="post" action="index.php">
                        <?php include('support_pages/errors.php'); ?>
                        <table>
                            <tr>
                                <div class="input-group">
                                    <td><label><b>Username</b></label></td>
                                    <td><input placeholder="Enter Username" type="text" name="username" value="<?php echo $username; ?>"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="input-group">
                                    <td><label><b>Email</b></label></td>
                                    <td><input placeholder="Enter Email" type="email" name="email" value="<?php echo $email; ?>"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="input-group">
                                    <td><label><b>Password</b></label></td>
                                    <td><input placeholder="Enter Password" type="password" name="password_1"></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="input-group">
                                    <td><label><b>Confirm password</b></label></td>
                                    <td><input placeholder="Confirm Password" type="password" name="password_2"></td>
                                </div>
                            </tr>
                        </table><br>
                        <div class="input-group">
                            <button type="submit" class="btn" name="reg_user">Register</button>
                        </div><br>
                        <p>
                            Already a member? <a href="login.php">Login</a>
                        </p>
                    </form>
                    <!-- .container -->
                </div>
            </div><br><br>
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="widget">
                            <a href="about.php">
                                <h3 class="widget-title">About Us</h3>
                            </a>
                            <p>This website was created for academic purposes.</p>
                        </div>
                </div><br><br>
                <!-- .row -->

                <div class="colophon">Computer Science Assignment 2019 </div>
            </div>
            <!-- .container -->

        </footer>

    </div>


    <!-- Default snippet for navigation -->



    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>


</body>

</html>
