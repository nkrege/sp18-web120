<?php include "big-config.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/form.css" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   	    <script src="http://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   		<script src="js/script.js"></script>
    </head>
    <body>
<!-- START WRAPPER -->
        <div class="wrapper">
        <header>
        <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Nick's BIG Website</a></h1>
            <nav id="cssmenu">
                <ul>
                    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
                    <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
                    <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Web Development Research</span></a>
                        <ul>
                            <li><a href="flexbox.php"><span><i class="fa fa-th-large"></i> Flexbox</span></a></li>
                            <li><a href="galleries.php"><span><i class="fa fa-file-image-o"></i> Galleries</span></a></li>
                            <li><a href="parallax.php"><span><i class="fa fa-window-restore"></i> Parallax</span></a></li>
                            <li><a href="shoppingcarts.php"><span><i class="fa fa-shopping-cart"></i> Shopping Carts</span></a></li>
                            <li><a href="siteapp.php"><span><i class="fa fa-mobile"></i> Site vs App</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                        <ul>
                            <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                            <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                            <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                        </ul>
                    </li>
                    <li><a href="webcam.php"><span><i class="fa fa-video-camera"></i> Web Cam</span></a></li>
                </ul>
            </nav>
        </header>
        
    <!-- START LEFT COL -->
        <section>
            <h2 class="pageID"><?=$PageID?></h2>
     <!-- END header.php include here! -->