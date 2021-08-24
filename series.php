<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <script>
        //var search = $("#search-criteria");
        //var items = $(".fbbox");
        var api_key = "88508155628429f2fa72e40e2331b0fa";
        var base_uri = "http://api.themoviedb.org/3";
        var images_uri = "http://image.tmdb.org/t/p/w342//";

        $(document).ready(function() {
            //$("#search").on("click",function(){
            $("button").click(function() {

                console.log("dss");

                var search_querry = $("#search-criteria");
                //var v = search_querry.val();
                //v = "Batman";
                var v = $('#term').val();
                //console.log(v);
                //alert(v);

                $.getJSON(base_uri + "/search/tv?query=" + v + "&api_key=" + api_key + "&callback=?",
                    function(json) {
                        if (json.total_results) {
                            //Display the poster and a message announcing the result
                            $('#print').html('<h2 class="loading">Search Results: ' + v + '</h2>');
                            for (var i = 0; i < 8; i++) {
                                $('#tvposter' + i).html('<img id="poster" src=' + images_uri + json.results[i].poster_path + '>');
                                $('#tvtitle' + i).html(json.results[i].name);
                                $('#tvpar' + i).html(json.results[i].overview);
                                $('#ttitle' + i).html(json.results[i].name);
                            }
                        } else {
                            $('#print').html('<h2 class="loading">No Results. </h2>')
                        }
                    })
            });
        });

    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>TV Series</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
		<script src="js/ie-support/php5.js"></script>
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
                        <small class="site-description"></small>
                    </div>
                </a>
                <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="movies.php">Movies</a></li>
                        <li class="menu-item current-menu-item"><a href="series.php">TV Series</a></li>
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
                    <form class="search-form" name="fetch">
                        <input type="text" id="term" placeholder="Search TV Series..." required>
                        <button type="button" id="submit"><i class="fa fa-search"></i></button>
                    </form>
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
                        <span>TV Series</span>
                    </div>
                </div>


                <section id="print">
                    <h2> Most Popular TV Series</h2>
                </section>
                <div class="movie-list">
                    <div class="movie">
                        <figure class="movie-poster">
                            <section id="tvposter0">
                            </section>
                        </figure>
                        <div class="movie-title">
                            <var id="tvid0" style="display:none;"></var>
                            <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid0').innerHTML+'&name='+document.getElementById('titleNoSpaces0').textContent; return false;">
                                <section style="display: none;" id="titleNoSpaces0"></section>
                                <section id="tvtitle0">
                                </section>
                            </a>
                        </div>
                        <p id="tvpar0">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster">
                            <section id="tvposter1">
                            </section>
                        </figure>
                        <div class="movie-title">
                            <var id="tvid1" style="display:none;"></var>
                            <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid1').innerHTML+'&name='+document.getElementById('titleNoSpaces1').textContent; return false;">
                                <section style="display: none;" id="titleNoSpaces1"></section>
                                <section id="tvtitle1">
                                </section>
                            </a>
                        </div>
                        <p id="tvpar1">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster">
                            <section id="tvposter2">
                            </section>
                        </figure>
                        <div class="movie-title">
                            <var id="tvid2" style="display:none;"></var>
                            <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid2').innerHTML+'&name='+document.getElementById('titleNoSpaces2').textContent; return false;">
                                <section style="display: none;" id="titleNoSpaces2"></section>
                                <section id="tvtitle2">
                                </section>
                            </a>
                        </div>
                        <p id="tvpar2">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster">
                            <section id="tvposter3">
                            </section>
                        </figure>
                        <div class="movie-title">
                            <var id="tvid3" style="display:none;"></var>
                            <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid3').innerHTML+'&name='+document.getElementById('titleNoSpaces3').textContent; return false;">
                                <section style="display: none;" id="titleNoSpaces3"></section>
                                <section id="tvtitle3">
                                </section>
                            </a>
                        </div>
                        <p id="tvpar3">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster">
                            <section id="tvposter4">
                            </section>
                        </figure>
                        <div class="movie-title">
                            <var id="tvid4" style="display:none;"></var>
                            <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid4').innerHTML+'&name='+document.getElementById('titleNoSpaces4').textContent; return false;">
                                <section style="display: none;" id="titleNoSpaces4"></section>
                                <section id="tvtitle4">
                                </section>
                            </a>
                        </div>
                        <p id="tvpar4">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster">
                            <section id="tvposter5">
                            </section>
                        </figure>
                        <div class="movie-title">
                            <var id="tvid5" style="display:none;"></var>
                            <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid5').innerHTML+'&name='+document.getElementById('titleNoSpaces5').textContent; return false;">
                                <section style="display: none;" id="titleNoSpaces5"></section>
                                <section id="tvtitle5"> </section> </a> </div> <p id="tvpar5">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                        </div>
                        <div class="movie">
                            <figure class="movie-poster">
                                <section id="tvposter6">
                                </section>
                            </figure>
                            <div class="movie-title">
                                <var id="tvid6" style="display:none;"></var>
                                <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid6').innerHTML+'&name='+document.getElementById('titleNoSpaces6').textContent; return false;">
                                    <section style="display: none;" id="titleNoSpaces6"></section>
                                    <section id="tvtitle6">
                                    </section>
                                </a>
                            </div>
                            <p id="tvpar6">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                        </div>
                        <div class="movie">
                            <figure class="movie-poster">
                                <section id="tvposter7">
                                </section>
                            </figure>
                            <div class="movie-title">
                                <var id="tvid7" style="display:none;"></var>
                                <a href="tvsingle.php" onclick=" window.location.href=this.href+'?id='+document.getElementById('tvid7').innerHTML+'&name='+document.getElementById('titleNoSpaces7').textContent; return false;">
                                    <section style="display: none;" id="titleNoSpaces7"></section>
                                    <section id="tvtitle7">
                                    </section>
                                </a>
                            </div>
                            <p id="tvpar7">Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                        </div>
                        <!-- .movie-list -->
                        <!-- .movie-list -->

                        <!--
<div class="pagination">
    <a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
    <span class="page-number current">1</span>
    <a href="#" class="page-number">2</a>
    <a href="#" class="page-number">3</a>
    <a href="#" class="page-number">4</a>
    <a href="#" class="page-number">5</a>
    <a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
</div>
-->
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
    <script src="js/tvdiscover.js"></script>

</body>

</html>
