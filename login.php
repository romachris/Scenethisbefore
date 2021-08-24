<?php include('server.php');

require_once('support_pages/settings.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--START META DATA PAGE DESCRIPTION-->

    <!--END META DATA PAGE DESCRIPTION-->
    <title>Scene This before LOGIN</title>

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
                        <li class="menu-item"><a href="signup.php">Sign Up</a></li>
                        <li class="menu-item current-menu-item" act><a href="login.php">Log In</a></li>


                    </ul>
                    <!-- .menu -->


                </div>
                <!-- .main-navigation -->


                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a>
                        <span>Log In</span>
                    </div>
                    <h2>Log In</h2>
                </div><br>
                <div class="content">
                    <form method="post" action="index.php">
                        <?php include('support_pages/errors.php'); ?>
                        <table>
                            <tr>
                                <div class="main-content">
                                    <td><label for="uname"><b>Username: </b></label></td>
                                    <td><input type="text" placeholder="Enter Username" name=username required></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="main-content">
                                    <td><label for="psw"><b>Password: </b></label></td>
                                    <td><input type="password" placeholder="Enter Password" name="password" required></td>
                                </div>
                            </tr>
                        </table><br>
                        <div class="main-content">
                            <button type="submit" class="btn" name="login_user">Login</button>
                        </div><br>
                        <div>
                            <table>
                                <tr>
                                    <td><a href="<?= $login_url ?>">Login with Google<img src="http://pngimg.com/uploads/google/google_PNG19635.png" width="20px;"></a></td>
                                </tr>
                            </table>
                            <p>
                                Not yet a member? <a href="signup.php">Sign up</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div><br><br>


            <!-- .container -->
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

                <div class="colophon">Computer Science Assignment 2019</div>
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
