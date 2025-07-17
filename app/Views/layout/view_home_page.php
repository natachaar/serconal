<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
    <head>
        <meta charset="utf-8">
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <!-- SEO Meta Tags -->
        <title>Serconal | Agencia de Servicios a Cuba</title>
        <meta name="description" content="Agencias de Servicios a Cuba, envío de dinero, envío de recargas a celulares, compras de productos en línea.">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!--Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png'); ?>" />
        <!-- Bootstrap + Theme styles -->
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/theme.css?v=1.0.0'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome_all.min.css'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery.loadingModal.css'); ?>">
    </head>
    <body>


        <!-- ========== HEADER ========== -->
        <header id="header" class="navbar navbar-expand-lg navbar-center navbar-light bg-white navbar-absolute-top navbar-show-hide">
            <div class="container-lg">
                <nav class="js-mega-menu navbar-nav-wrap">
                    <!-- Logo -->

                    <a class="navbar-brand" href="<?= base_url(); ?>" aria-label="Serconal">
                        <img class="navbar-brand-logo" src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo">
                    </a>
                    <!-- Secondary Content -->
                    <div class="navbar-nav-wrap-secondary-content">
                        <a class="btn btn-primary navbar-btn" href="<?= base_url('login'); ?>">
                            Dashboard <i class="bi bi-box-arrow-in-right fa-lg ms-1"></i>
                        </a>
                    </div>
                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-default">
                            <i class="bi-list"></i>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <i class="bi-x"></i>
                        </span>
                    </button>
                    <!-- End Toggler -->

                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                               
                                    <i class="bi bi-telephone-x"></i> Contacto 
                                    <span>(+52) 56 2044 8115</span>
                                    <span>(+52) 55 1202 3374</span>
                               
                            </li>
                        </ul>
                    </div>
                    <!-- End Collapse -->
                </nav>
            </div>
        </header>

        <!-- ========== END HEADER ========== -->
        <!-- Bootstrap + Theme scripts -->
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/fontawesome_all.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.loadingModal.js') ?>"></script>
        <script src="<?= base_url('assets/js/login.js?v=1.0.0') ?>"></script>
    </body>
</html>