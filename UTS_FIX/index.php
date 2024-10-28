<?php include 'php/functions.php'; ?>

<!DOCTYPE html>
<html class="no-js ss-preload" lang="en">
<head>

    <!-- Basic page needs -->
    <meta charset="utf-8">
    <title>Faris</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Page wrap -->
    <div class="s-pagewrap">
        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Site header -->
        <header class="s-header">
            <div class="header-mobile">
                <span class="mobile-home-link"><a href="index.html">Faris.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="index.php" class="home-link">Faris.</a></li>
                        <li class="current"><a>Intro</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="certificate.php">Certificates</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Say Hello</a></li>
                    </ul>
                </nav>
            </div>
        </header> <!-- end s-header -->

        <!-- Main content -->
        <main class="s-content">
            <!-- Intro section -->
            <section id="intro" class="s-intro target-section">
                <div class="row intro-content wide">
                    <div class="column">
                        <div class="text-pretitle with-line">
                            <?php
                            $introTitle = getIntroTitle(); 
                            echo htmlspecialchars($introTitle);
                            ?>
                        </div>

                        <h1 class="text-huge-title">
                            <?php
                            $introContent = getIntroContent(); 
                            echo nl2br(htmlspecialchars($introContent)); 
                            ?>
                        </h1>
                    </div>
                </div> <!-- end intro content -->
            </section> <!-- end s-intro -->
        </main> <!-- end s-content -->
    </div> <!-- end -s-pagewrap -->

    <!-- JavaScript -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
