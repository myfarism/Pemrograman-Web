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

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <style>
        .modal-popup {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000; 
        }
    </style>
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
                        <li><a href="index.php">Intro</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="current"><a href="certificate.php">Certificates</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Say Hello</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main content -->
        <main class="s-content">

            <!-- Works section -->
            <section id="works" class="s-works target-section">
                <div class="row works-portfolio">
                    <div class="column lg-12" data-animate-block>
                        <h2 class="text-pretitle" data-animate-el>Recent Activity</h2>
                        <p class="h1" data-animate-el>Here are some of my certificates I have done lately. Feel free to check them out.</p>
    
                        <ul class="folio-list row block-lg-one-half block-stack-on-1000">
                            <?php
                            $sertifs = getSertifs(); 
                            foreach ($sertifs as $index => $sertif) {
                                echo '
                                <li class="folio-list__item column" data-animate-el>
                                    <a class="folio-list__item-link" href="#modal-' . $index . '">
                                        <div class="folio-list__item-pic">
                                            <img src="' . $sertif['image_url'] . '" alt="' . $sertif['title'] . '">
                                        </div>
                                        <div class="folio-list__item-text">
                                            <div class="folio-list__item-cat">
                                                Certificate
                                            </div>
                                            <div class="folio-list__item-title">
                                                ' . $sertif['title'] . '
                                            </div>
                                        </div>
                                    </a>
                                    <a class="folio-list__proj-link" href="' . $sertif['link'] . '" title="project link">Link</a>
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
        </main>

        <!-- Modal Structure -->
        <?php foreach ($sertifs as $index => $sertif): ?>
        <div id="modal-<?php echo $index; ?>" class="modal-popup" hidden>
            <img src="<?php echo $sertif['image_url']; ?>" alt="">
            <div class="modal-popup__desc">
                <h5><?php echo $sertif['title']; ?></h5>
                <p>Description for <?php echo $sertif['title']; ?>.</p>
                <ul class="modal-popup__cat">
                    <li>Category</li>
                </ul>
            </div>
            <a href="<?php echo $sertif['link']; ?>" class="modal-popup__details">Project link</a>
        </div>
        <?php endforeach; ?>
    </div> <!-- end s-pagewrap -->

    <!-- JavaScript -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.querySelectorAll('.folio-list__item-link').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); 

                const modalId = this.getAttribute('href');
                
                document.querySelectorAll('.modal-popup').forEach(modal => {
                    modal.style.display = 'none'; 
                });

                const modalToShow = document.querySelector(modalId);
                if (modalToShow) {
                    modalToShow.style.display = 'block'; 
                }
            });
        });

        document.querySelectorAll('.modal-popup').forEach(modal => {
            modal.addEventListener('click', function (event) {
                if (event.target === this) {
                    this.style.display = 'none'; 
                }
            });
        });
    </script>

</body>
</html>
