<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Movie Review</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom styles for this template -->

    <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

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
                        <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="movies.php">Movies</a></li>
                        <li class="menu-item"><a href="series.php">TV Series</a></li>
                        <li class="menu-item"><a href="getLocationInfo.php">Locations</a></li>
                        <li class="menu-item"><a href="about.php">About Us</a></li>
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
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider">
                                <ul class="slides">
                                    <li><a href="moviesingle.php?id=27205&name=Inception">
                                            <section id="mov0"><img src="http://image.tmdb.org/t/p/w780/qmDpIHrmpJINaRKAfWQfftjCdyi.jpg"></section>
                                        </a></li>
                                    <li><a href="moviesingle.php?id=671&name=HarryPotter">
                                            <section id="mov1"><img src="http://image.tmdb.org/t/p/w780/dCtFvscYcXQKTNvyyaQr2g2UacJ.jpg"></section>
                                        </a></li>
                                    <li><a href="moviesingle.php?id=550&name=FightClub">
                                            <section id="mov2"><img src="http://image.tmdb.org/t/p/w780/adw6Lq9FiC9zjYEpOqfq03ituwp.jpg"></section>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="latest-movie">
                                        <a href="moviesingle.php?id=107&name=Snatch">
                                            <section id="mov3"><img src="http://image.tmdb.org/t/p/w342/on9JlbGEccLsYkjeEph2Whm1DIp.jpg"></section>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="latest-movie">
                                        <a href="tvsingle.php?id=1668&name=Friends">
                                            <section id="mov4"><img src="http://image.tmdb.org/t/p/w342/7buCWBTpiPrCF5Lt023dSC60rgS.jpg"></section>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="latest-movie">
                                        <a href="moviesingle.php?id=8321&name=InBruges">
                                            <section id="mov5"><img src="http://image.tmdb.org/t/p/w342/kBABboeLU2HsKWSG7DwiF9saHl5.jpg"></section>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="moviesingle.php?id=603&name=Matrix">
                                    <section id="mov6"><img src="http://image.tmdb.org/t/p/w342/hEpWvX6Bp79eLxY1kX5ZZJcme5U.jpg"></section>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="moviesingle.php?id=591&name=DaVinciCode">
                                    <section id="mov7"><img src="http://image.tmdb.org/t/p/w342/5IqaT3fza0Y9vKazjGwDGsNuuS8.jpg"></section>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="moviesingle.php?id=562&name=DieHard">
                                    <section id="mov8"><img src="http://image.tmdb.org/t/p/w342/mc7MubOLcIw3MDvnuQFrO9psfCa.jpg"></section>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="tvsingle.php?id=1399&name=GameOfThrones">
                                    <section id="mov9"><img src="http://image.tmdb.org/t/p/w342/2SqdROIFSZ5FuwBjd0liMTXR3Rb.jpg"></section>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->

                    <div class="row">
                        <div class="col-md-4">
                            <h2 href class="section-title">Popular Movies</h2>
                            <ul class="movie-schedule">
                                <li>
                                    <h2 class="entry-title">
                                        <var id="mid0" style="display: none;"></var>
                                        <a href="moviesingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('mid0').innerHTML+'&name='+document.getElementById('titleNoSpaces0').textContent; return false;">
                                            <section style="display: none;" id="movtitleNoSpaces0"></section>

                                            <section id="title0">Movie Title</section>
                                        </a></h2>
                                </li>
                                <li>
                                    <h2 class="entry-title">
                                        <var id="mid1" style="display: none;"></var>
                                        <a href="moviesingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('mid1').innerHTML+'&name='+document.getElementById('movtitleNoSpaces1').textContent; return false;">
                                            <section style="display: none;" id="movtitleNoSpaces1"></section>

                                            <section href="#" id="title1">Perspiciatis unde omnis</section>
                                        </a></h2>
                                </li>
                                <li>
                                    <h2 class="entry-title">
                                        <var id="mid2" style="display: none;"></var>
                                        <a href="moviesingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('mid2').innerHTML+'&name='+document.getElementById('movtitleNoSpaces2').textContent; return false;">
                                            <section style="display: none;" id="movtitleNoSpaces2"></section>

                                            <section href="#" id="title2">Perspiciatis unde omnis</section>
                                        </a></h2>
                                </li>
                                <li>
                                    <h2 class="entry-title">
                                        <var id="mid3" style="display: none;"></var>
                                        <a href="moviesingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('mid3').innerHTML+'&name='+document.getElementById('movtitleNoSpaces3').textContent; return false;">
                                            <section style="display: none;" id="movtitleNoSpaces3"></section>

                                            <section href="#" id="title3">Perspiciatis unde omnis</section>
                                        </a></h2>
                                </li>
                            </ul>
                            <!-- .movie-schedule -->
                        </div>
                        <div class="col-md-4">
                            <h2 class="section-title">Popular TV Series</h2>
                            <ul class="movie-schedule">
                                <li>
                                    <h2 class="entry-title">
                                        <var id="tvid0" style="display:none;"></var>
                                        <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid0').innerHTML+'&name='+document.getElementById('tvtitleNoSpaces0').textContent; return false;">
                                            <section style="display: none;" id="tvtitleNoSpaces0"></section>

                                            <section id="ttitle0">TV Title</section>
                                        </a></h2>
                                </li>
                                <li>
                                    <h2 class="entry-title">
                                        <var id="tvid1" style="display:none;"></var>
                                        <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid1').innerHTML+'&name='+document.getElementById('tvtitleNoSpaces1').textContent; return false;">
                                            <section style="display: none;" id="tvtitleNoSpaces1"></section>

                                            <section id="ttitle1">TV Title</section>
                                        </a></h2>
                                </li>
                                <li>
                                    <h2 class="entry-title">
                                        <var id="tvid2" style="display:none;"></var>
                                        <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid2').innerHTML+'&name='+document.getElementById('tvtitleNoSpaces2').textContent; return false;">
                                            <section style="display: none;" id="tvtitleNoSpaces2"></section>

                                            <section id="ttitle2">Perspiciatis unde omnis</section>
                                        </a></h2>
                                </li>
                                <li>
                                    <h2 class="entry-title">
                                        <var id="tvid3" style="display:none;"></var>
                                        <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid3').innerHTML+'&name='+document.getElementById('tvtitleNoSpaces3').textContent; return false;">
                                            <section style="display: none;" id="tvtitleNoSpaces3"></section>

                                            <section id="ttitle3">Perspiciatis unde omnis</section>
                                        </a></h2>
                                </li>
                            </ul>
                            <!-- .movie-schedule -->
                        </div>



                        <div class="col-md-4">
                            <h2 class="section-title">Popular Locations</h2>
                            <ul class="movie-schedule">
                                <?php
                                $con = mysqli_connect('localhost','root','','movlocationsdatabase');
                                if (!$con) {
                                    die('Could not connect: ' . mysqli_error($con));
                                }

                                mysqli_select_db($con,"movlocationsdatabase");
                                $sql="SELECT * FROM `locations` LIMIT 4";
                                $result = mysqli_query($con,$sql);

                                while($row = mysqli_fetch_array($result)) {
                                    echo "<li><h2 class='entry-title'><a href='contact.php?mname=".$row['movieName']."&lname=".$row['locationName']."'>".$row['locationName']."</a></h2></li>";
    
  
                                }
                                mysqli_close($con);
                                ?>
                            </ul>
                            <!-- .movie-schedule -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container -->
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget">
                            <a href="about.php">
                                <h3 class="widget-title">About Us</h3>
                            </a>
                            <p>This website was created for academic purposes.</p>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <div class="colophon">Computer Science 2019</div>
            </div>
            <!-- .container -->

        </footer>
    </div>
    <!-- Default snippet for navigation -->


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="js/movdiscover.js"></script>
    <script src="js/tvdiscover.js"></script>






</body>

</html>
