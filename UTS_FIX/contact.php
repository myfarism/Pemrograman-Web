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
                <span class="mobile-home-link"><a href="index.php">Faris.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="index.php" class="home-link">Faris.</a></li>
                        <li><a href="index.php">Intro</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="certificate.php">Certificates</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li class="current"><a href="contact.php">Say Hello</a></li>
                    </ul>
                </nav>
            </div>
        </header> <!-- end s-header -->

        <!-- Main content -->
        <main class="s-content">
            <!-- Contact section -->
            <section id="contact" class="s-contact target-section">
                <div class="row contact-top">
                    <div class="column lg-12">
                        <h2 class="text-pretitle">Get In Touch</h2>
                        <p class="h1">
                            I love to hear from you. Whether you have a question or just want to chat about programming, tech & music — shoot me a message.
                        </p>
                    </div>
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <?php
                        $contact = getContactDetails();
                        $email = htmlspecialchars($contact['email'] ?? 'No Data');
                        $phone = htmlspecialchars($contact['phone'] ?? 'No Data');
                        $instagram = htmlspecialchars($contact['link_instagram'] ?? 'No Data');
                        $github = htmlspecialchars($contact['link_github'] ?? 'No Data');
                        ?>
                        <p class="contact-links">
                            <a href="mailto:<?php echo $email; ?>" class="mailtoui"><?php echo $email; ?></a> <br>
                            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="<?php echo $instagram; ?>">Instagram</a></li>
                            <li><a href="<?php echo $github; ?>">Github</a></li>
                        </ul>
                    </div>
                    <div class="column lg-7 md-14 contact-block">
                        <a href="mailto:<?php echo $email; ?>" class="mailtoui btn btn--medium u-fullwidth contact-btn">Say Hello.</a>
                    </div>
                </div> <!-- end contact-bottom -->
            </section> <!-- end contact -->
        </main> <!-- end s-content -->
    </div> <!-- end -s-pagewrap -->

    <!-- JavaScript -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
