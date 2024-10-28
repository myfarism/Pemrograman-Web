<?php include 'php/functions.php'; ?>

<!DOCTYPE html>
<html class="no-js ss-preload" lang="en">
<head>

    <!-- Basic page needs -->
    <meta charset="utf-8">
    <title>Gallery</title>
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
        .card-img-top {
            height: 150px; 
            object-fit: cover; 
        }
        .gallery-card {
            margin: 10px; 
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
                        <li><a href="certificate.php">Certificates</a></li>
                        <li class="current"><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Say Hello</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main content -->
        <main class="s-content">

            <!-- Gallery section -->
            <section class="s-works target-section">
                <div class="row works-portfolio">
                    <div class="column lg-12" data-animate-block>
                        <h1>Gallery</h1>
                        <div class="row">
                            <?php
                            $images = getGalleryImages();
                            foreach ($images as $index => $image) {
                                echo '
                                <div class="col-md-3 mb-4"> <!-- Adjusted column size for smaller images -->
                                    <div class="card gallery-card"> <!-- Use custom class for spacing -->
                                        <a class="gallery-item-link" href="#modal-' . $index . '">
                                            <img src="' . $image['image_url'] . '" class="card-img-top" alt="Image">
                                        </a>
                                        <div class="card-body">
                                            <p class="card-text">' . $image['caption'] . '</p>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Modal Structure -->
        <?php foreach ($images as $index => $image): ?>
        <div id="modal-<?php echo $index; ?>" class="modal-popup" hidden>
            <img src="<?php echo $image['image_url']; ?>" alt="">
            <div class="modal-popup__desc">
                <h5><?php echo $image['caption']; ?></h5>
                <p>Description for <?php echo $image['caption']; ?>.</p>
            </div>
            <a href="#" class="modal-popup__details" onclick="document.getElementById('modal-<?php echo $index; ?>').style.display='none'; return false;">Close</a>
        </div>
        <?php endforeach; ?>
    </div> <!-- end s-pagewrap -->

    <!-- JavaScript -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        document.querySelectorAll('.gallery-item-link').forEach(link => {
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
