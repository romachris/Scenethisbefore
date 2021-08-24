<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>AboutUs</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

   
</head>


<body>


    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="index.php" id="branding">
                    <img src="images/logo.png" alt="" class="logo">
                    <div class="logo-copy">
                        <h1 class="site-title">Scene This Before</h1>
                    </div>
                </a>
                <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="movies.php">Movies</a></li>
                        <li class="menu-item "><a href="series.php">TV Series</a></li>
                        <li class="menu-item"><a href="getLocationInfo.php">Locations</a></li>
                        <li class="menu-item current-menu-item"><a href="about.php">About Us</a></li>
                        <?php if(isset($_SESSION['username'])) {?>
                        <li class="menu-item"><?php echo $_SESSION['username']; ?></li>

                        <li class="menu-item"><a href="logout.php">Logout</a></li>
                        <?php
                            }
                            else{
                        ?>
                        <li class="menu-item"><a href="signup.php">Sign Up</a></li>
                        <li class="menu-item"><a href="login.php">Log In</a></li>
                        <?php
                            }
                        ?>
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
                        <span>About us</span>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <figure><img src="dummy/new.jpg" alt="figure image"></figure>
                        </div>
                        <div class="col-md-8">
                            <p class="leading">What is Scene this before?</p>
                            <p>Have you ever watced a movie or a Tv series with a fantastic world and scenery and thought to yourself, I wonder where this place is? If yes then this website is for you! Find the countries and cities that your favorite movies and series got filmed in.
                                <br />Follow the steps of your favorite actors and relive their story!
                                <br />Don't believe us?
                                <br />Try it yourself!</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <h2 class="section-title">Vision &amp; Mission</h2>
                            <p>This site was created on the context of the second academic year in City College deparment of the University of Sheffield.</p>

                        </div>
                        <div class="col-md-3">
                            <h2 class="section-title">Useful Links</h2>
                            <ul class="arrow">
                                <li><a href="https://www.themoviedb.org/documentation/api?language=el">API used</a></li>
                                <li><a href="https://www.google.com/maps">Google Maps</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .row -->

                    <h2 class="section-title">Our Team</h2>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="team">
                                <figure class="team-image"><img src="images/thanasis.jpg" alt=""></figure>
                                <h2 class="team-name">Athanasios Thomaidis</h2>
                                <small class="team-title">Founder</small>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/thanasis.thomaidis.10" class="facebook"><i class="fa fa-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team">
                                <figure class="team-image"><img src="images/christos.jpg" alt=""></figure>
                                <h2 class="team-name">Christos Louarasis</h2>
                                <small class="team-title">Founder</small>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/christos.louarasis" class="facebook"><i class="fa fa-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team">
                                <figure class="team-image"><img src="images/zoi.jpg" alt=""></figure>
                                <h2 class="team-name">Zoi Gkatsi</h2>
                                <small class="team-title">Founder</small>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/zoi.gaci" class="facebook"><i class="fa fa-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team">
                                <figure class="team-image"><img src="images/nikos.jpg" alt=""></figure>
                                <h2 class="team-name">Nikolaos Zagkoumidis</h2>
                                <small class="team-title">Founder</small>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/nikos.zagkoumidis" class="facebook"><i class="fa fa-facebook"></i></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- .container -->
        </main>
        <footer class="site-footer">
            <div class="container">
                
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
