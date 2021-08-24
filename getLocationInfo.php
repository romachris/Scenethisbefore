<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">



    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom styles for this template -->
    <link href="css/movies.css" rel="stylesheet">

    <!--[if lt IE 9]>
<script src="js/ie-support/html5.js"></script>
<script src="js/ie-support/respond.js"></script>
<![endif]-->

    <title>Movie Locations Guide: Maps and Directions to Filming Locations</title>
    <style>
        /*
            html,
            body {
            height: 100%;
            margin: 0;
            padding: 0;
            }
            */
        #map,
        #pano {
            float: left;
            height: 50%;
            width: 50%;
        }

        .location {
            height: auto;
            width: auto;
        }

    </style>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }

    </style>
</head>

<body>
    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="index.html" id="branding">
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
                        <li class="menu-item current-menu-item"><a href="getLocationInfo.php">Locations</a></li>
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
        <!--
<header>
<div class="container">
<h1><a href="/">Scene This Before</a></h1>
</div>
<nav>
<ul class="container" id="navlist">
<li><a href="/movie-locations">Movies</a></li>
<li><a href="/tv-locations">TV Shows</a></li>
<li><a href="">Locations</a></li>
</ul>
</nav>
</header>
-->
        
        <div class="breadcrumb">
            <div class="container">
                <h2>Locations List</h2>
                <div class="share-button"></div>
            </div>
        </div>
        <div class="container">
            <?php
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','movlocationsdatabase');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"movlocationsdatabase");
$sql="SELECT * FROM `locations`";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Motion Picture</th>
<th>Location Name</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><a href='single.php'>". $row['movieName'] . "</a></td>";
    echo "<td><a href='contact.php?mname=".$row['movieName']."&lname=".$row['locationName']."'>" . $row['locationName'] . "</a></td>";
    echo "<td>" . $row['locationDescription'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

        </div>
        
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

                <div class="colophon">Computer Science Assignment 2019</div>
            </div>
            <!-- .container -->

        </footer>
    </div>
</body>

</html>
