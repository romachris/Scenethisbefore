<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
        var api_key = "88508155628429f2fa72e40e2331b0fa";
        var base_uri = "http://api.themoviedb.org/3";
        var images_uri = "http://image.tmdb.org/t/p/w780//";

        var v = <?php echo $_GET['id']; ?> ;

        $.getJSON(base_uri + "/tv/" + v + "?api_key=" + api_key + "&callback=?",
            function(json) {
                console.log(json);


                //Display the poster and a message announcing the result
                $('.movie-poster').html('<img id="poster" src=' + images_uri + json.poster_path + '>');
                $('.movie-title').html(json.name);
                $('.movie-summary').html(json.overview);
                $('#star-rating').html(json.vote_average);
                $('#premiere').html(json.first_air_date);
                $('#genre').html(json.genres[0].name);
                $('#genre1').html("/" + json.genres[1].name);
                $('#title').html(json.name);

            })

    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Single</title>

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
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a>
                        <span id="title"></span>
                    </div>

                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <figure id="poster" class="movie-poster"></figure>
                            </div>
                            <div class="col-md-6">
                                <h2 class="movie-title" action="post"></h2>
                                <div class="movie-summary">
                                    <p></p>

                                    <p></p>
                                </div>
                                <ul class="movie-meta">
                                    <li><strong>Rating:</strong>
                                        <div id="star-rating"><strong style="width:80%"></strong></div>
                                    </li>
                                    <li><strong>Premiere:</strong> <strong id="premiere"></strong></li>
                                    <li><strong>Category:</strong><strong id="genre"></strong><strong id="genre1"></strong></li>
                                </ul>

                            </div>
                        </div>
                        <!-- .row -->
                        <div class="entry-content">
                            <h2>Locations</h2>
                            <?php
                            
$q = $_GET['name'];


$con = mysqli_connect('localhost','root','','movlocationsdatabase');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"movlocationsdatabase");
$sql="SELECT * FROM `locations` WHERE movieName='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Location Name</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><a href='contact.php?mname=".$row['movieName']."&lname=".$row['locationName']."'>" . $row['locationName'] . "</a></td>";
    echo "<td>" . $row['locationDescription'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
                            <p></p>
                            <p></p>

                        </div>
                    </div>
                </div>
            </div>
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

</body>

</html>
