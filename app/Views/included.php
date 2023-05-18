<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Check The Menu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/images/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Tabler Icons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url(); ?>/assets/css/styles.css" rel="stylesheet"/>
    </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="/">Check The Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                            <li><a class="dropdown-item" href="/about">About Us</a></li>
                            <li><a class="dropdown-item" href="/tiers">Tier System</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                            <li><a class="dropdown-item" target="_blank" href="https://www.support.checkthemenu.uk/">Support Site</a></li>
                            <li><a class="dropdown-item" href="/contact">Contact Us</a></li>
                        </ul>
                    </li>
                    <a class="btn btn-primary" target="_blank" href="https://www.dashboard.checkthemenu.uk/">
                        <i class="bi-person-circle me-1"></i> Login
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <body>
    <?= $this->renderSection('content') ?>
    </body>

    <!-- Footer-->
    <footer class="py-4 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Check The Menu <?php echo date('Y'); ?></p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>
</html>