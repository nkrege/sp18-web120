<?php include 'site-config.php'?>
<!DOCTYPE html> <!-- THIS FOOTER IS TO BE USED ON ALL PAGES EXCEPT FOR INDEX.PHP!!!!! IF YOU MAKE ANY CHANGES HERE, YOU MUST ALSO MAKE THEM TO INDEX.PHP!!!-->
<html lang="en" id="<?=$page?>">
    <head>
        <title><?=$title?></title>
        <meta name="robots" content="noindex,nofollow" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta name="keywords" content="florida chiropractors, chiropractor st pete, chiropractic st petersburg, chiropractic treatment, family chiropractic center, florida doctors, St Petersburg chiropractors, car accident treatment Florida, treating back pain, neck pain, whiplash, St Pete, Seminole, St Petersburg FL, Dr Mark Gallant" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/video2.css" />
        <link href="css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <script src="js/script.js"></script>
        <script src="js/video2.js"></script>
    </head>
    <video autoplay muted loop id="myVideo">
        <source src="videos/wave.mp4" type="video/mp4">
    </video>
    <body>
        <div class="wrapper">
        <header class="<?=$header?>">
            <div class="logo">
                <a href="services.php"><img id="complogo" src="images/logo8-5.png" alt="Logo"></a>
            </div>
            <nav id="cssmenu">
                <ul>
                    <?=makeLinks($nav1)?>
                    <li><a href="http://markgallantdcllc.lifevantage.com/" target="_blank">Protandem</a></li>
                    <!--
                    <li><a href="index.php">Welcome!</a></li>
                    <li><a href="services.php">Our Services</a></li>
                    <li><a href="media.php">Media</a></li>
                    <li><a href="location.php">Location and Hours</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    -->
                </ul>
            </nav>
        </header>
        <div class="indexlogo">
            <span><a href="services.php"><img src="images/logo8.png" alt="Gallant Chiro"></a></span>
        </div>
        <section>
                <h2 class="pageID"><?=$PageID?></h2>