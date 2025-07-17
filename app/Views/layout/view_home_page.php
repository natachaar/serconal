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
        <header id="header" class="navbar navbar-expand-lg navbar-center navbar-light bg-white fixed-top">
            <div class="container-lg">
                <nav class="js-mega-menu navbar-nav-wrap">
                    <!-- Logo -->
                    <a class="navbar-brand" href="<?= base_url(); ?>" aria-label="Serconal">
                        <img class="navbar-brand-logo" src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" style="max-width: 12.5rem;">
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
                        <ul class="navbar-nav justify-content-end me-5">
                            <li class="nav-item">
                                <span class="me-2 text-primary">
                                    <i class="bi bi-telephone-x me-1"></i> Contacto  
                                </span>
                                <span class="border-end pe-2 me-1 border-primary">(+52) 56 2044 8115</span>
                                <span>(+52) 55 1202 3374</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End Collapse -->
                </nav>
            </div>
        </header>        
        <!-- ========== END HEADER ========== -->
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main" class="main">
            <!-- Hero -->
            <div class="overflow-hidden gradient-radial-sm-primary">
                <div class="container-lg content-space-t-3 content-space-t-lg-4 content-space-b-2">
                    <div class="w-lg-75 text-center mx-lg-auto text-center mx-auto">
                        <!-- Heading -->
                        <div class="mb-7 animated fadeInUp">
                            <h1 class="display-2 mb-3">Agencia de Servicios <span class="text-primary text-highlight-warning">a Cuba</span></h1>
                            <p class="fs-2">Serconal S.A. de C.V., empresa 100% mexicana.</p>
                        </div>
                        <!-- End Heading -->
                    </div>

                    <!-- Browser Device -->
                    <div class="row justify-content-center row-cols-2 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="d-flex flex-column flex-xxl-row align-items-center">
                                <img src="<?= base_url('assets/img/online.gif') ?>" alt="alt" width="80">
                                <div class="text-center text-xxl-start ps-xxl-3">
                                    <h3 class="h5 mb-1">Servicio 100% online</h3>
                                    <p class="fs-4 mb-0">Ágil y sencillo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column flex-xxl-row align-items-center">
                                <img src="<?= base_url('assets/img/shield.gif') ?>" alt="alt" width="80">
                                <div class="text-center text-xxl-start ps-xxl-3">
                                    <h3 class="h5 mb-1">Seguridad avalada</h3>
                                    <p class="fs-4 mb-0">+20 Años trabajando con Cuba</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column flex-xxl-row align-items-center">
                                <img src="<?= base_url('assets/img/location.gif') ?>" alt="alt" width="80">
                                <div class="text-center text-xxl-start ps-xxl-3">
                                    <h3 class="h5 mb-1">Oficina en México</h3>
                                    <p class="fs-4 mb-0">Nos puedes llamar o visitar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Browser Device -->
                </div>
            </div>
            <!-- End Hero -->

            <!-- Card Grid -->
            <div class="container-lg content-space-t-lg-2 content-space-b-2 content-space-b-lg-3">
                <!-- Heading -->
                <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
                    <h2 class="display-4">Alguno de nuestros <span class="text-primary">servicios</span></h2>
                    <p class="lead">Desde compra de productos en línea para tus familiares y amigos en Cuba hasta recargas de celulares y más...</p>
                </div>
                <!-- End Heading -->

                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-md-6 text-center">
                        <img class="img-fluid" src="<?= base_url('assets/img/dapamas.png') ?>" width="40%" alt="Dapamas">
                    </div>
                    <div class="col-md-5">
                        <h3 class="display-5 me-3">Dapamas Tienda, <br>el marketplace donde comprar para Cuba</h3>
                        <p class="lead mb-4">
                            En <strong class="text-primary">dapamas.com</strong> conectamos a compradores y vendedores para que encuentres todo lo que necesitas en un solo lugar. 
                            Desde artículos para el hogar hasta productos personales, tenemos opciones para todos los gustos.  
                            Es más fácil, seguro y eficiente. <br><br> <i><b>¿Lo mejor?</b> Puedes comprar desde cualquier lugar y enviar directamente a Cuba.</i>
                        </p>
                        <a class="btn btn-lg btn-primary mb-3" href="https://dapamas.com/" target="_blank">
                            Comprar Ahora
                            <i class="bi bi-arrow-up-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <hr>
                 <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-md-5 offset-1">
                        <h3 class="display-5 me-3">Dapamas Tienda, <br>el marketplace donde comprar para Cuba</h3>
                        <p class="lead mb-4">
                            En <strong class="text-primary">dapamas.com</strong> conectamos a compradores y vendedores para que encuentres todo lo que necesitas en un solo lugar. 
                            Desde artículos para el hogar hasta productos personales, tenemos opciones para todos los gustos.  
                            Es más fácil, seguro y eficiente. <br><br> <i><b>¿Lo mejor?</b> Puedes comprar desde cualquier lugar y enviar directamente a Cuba.</i>
                        </p>
                        <a class="btn btn-lg btn-primary mb-3" href="https://dapamas.com/" target="_blank">
                            Comprar Ahora
                            <i class="bi bi-arrow-up-right ms-2"></i>
                        </a>
                    </div>
                     <div class="col-md-5 text-center">
                        <img class="img-fluid" src="<?= base_url('assets/img/connection.svg') ?>" alt="Dapamas">
                    </div>
                </div>

                
              
            </div>
            <!-- End Card Grid -->

            <!-- Features -->
            <div class="container-lg content-space-b-2 content-space-b-lg-3">
                <ul class="list-inline list-py-2 list-px-1 text-center mb-0">
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Bootstrap Icons</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Illustrations</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Accordion</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Alerts</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Avatars</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Badge</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Breadcrumb</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Buttons</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Cards</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Collapse</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Column Divider</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Divider</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Dropdowns</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Icons</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">List Group</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Lists</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Legend Indicator</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Modal</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Offcanvas</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Page Header</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Pagination</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Popovers</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Progress</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Profile</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Shapes</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Spinners</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Steps</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Tab</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Toasts</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Tooltips</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Typography</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Navbar</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Navs</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Mega Menu</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Navbar Vertical Aside</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Scrollspy</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Tables</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Sticky Header</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Basic Forms</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Checks &amp; Switches</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Input Group</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Advanced Select</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">File Attachments</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Drag' n' Drop File Uploads</span>
                    </li>
                    <li class="list-inline-item">
                        <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">WYSIWYG Editor</span>
                    </li>
                </ul>
            </div>
            <!-- End Features -->

        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        <footer class="container-lg text-center py-10">
            <!-- Socials -->
            <ul class="list-inline mb-3">
                <li class="list-inline-item">
                    <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://www.facebook.com/htmlstream">
                        <i class="bi-facebook"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://twitter.com/htmlstream">
                        <i class="bi-twitter"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://github.com/htmlstreamofficial">
                        <i class="bi-github"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://www.instagram.com/htmlstream/">
                        <i class="bi-instagram"></i>
                    </a>
                </li>
            </ul>
            <!-- End Socials -->

            <p class="mb-0">&copy; Front. 2021 Htmlstream. All rights reserved.</p>
        </footer>
        <!-- ========== END FOOTER ========== -->

        <!-- Go To -->
        <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
           "offsetTop": 700,
           "position": {
           "init": {
           "right": "2rem"
           },
           "show": {
           "bottom": "2rem"
           },
           "hide": {
           "bottom": "-2rem"
           }
           }
           }'>
            <i class="bi-chevron-up"></i>
        </a>

        <!-- Bootstrap + Theme scripts -->
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/fontawesome_all.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.loadingModal.js') ?>"></script>
        <script src="<?= base_url('assets/js/login.js?v=1.0.0') ?>"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            });
        </script>
    </body>
</html>