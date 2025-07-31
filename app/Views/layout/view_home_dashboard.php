<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <title>Serconal | Agencia de Servicios a Cuba</title>
        <meta name="description" content="Agencias de Servicios a Cuba, envío de dinero, envío de recargas a celulares, compras de productos en línea.">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png'); ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/theme.css?v=1.0.0'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>
    <body class="bg-light">
        <?php
        $session = getSession();
        $username = $session['LoggedInAccount']['username'];
        ?>
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="" style="background-image: url(./assets/img/bg-login.svg);">
                <div class="content container" style="height: 25rem;">
                    <!-- Page Header -->
                    <div class="page-header page-header-light page-header-reset navbar-expand-lg">
                        <div class="navbar-nav">
                            <div class="row align-items-center flex-grow-1">
                                <div class="col">
                                    <!-- Logo -->
                                    <a class="navbar-brand" href="" aria-label="Front">
                                        <img class="navbar-brand-logo" src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" style="max-width: 12.5rem;">
                                    </a>
                                    <!-- End Logo -->
                                </div>
                                <div class="col-auto">
                                    <!-- Navbar -->
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <!-- Account -->
                                            <div class="dropdown">
                                                <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                                                    <div class="avatar avatar-sm avatar-circle">
                                                        <?= getAvatar($username); ?>
                                                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                                                    <div class="dropdown-item-text">
                                                        <div class="d-flex align-items-center">
                                                            <?= getAvatar($username); ?>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="mb-0">
                                                                    <?= $username; ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                                                        Sign out <i class="bi bi-box-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Account -->
                                        </li>
                                    </ul>
                                    <!-- End Navbar -->
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                    </div>
                    <!-- End Page Header -->
                </div>
            </div>
            <!-- End Content -->
            <!-- Content -->
            <div class="content container" style="margin-top: -15rem;">
                <div class="row justify-content-center gap-4">
                    <div class="col-md-3 order-3 order-md-1 card-transition">
                        <div class="card card-centered shadow-lg  mb-3 mb-lg-5">
                            <div class="card-body py-3 my-lg-10">
                                <img class="img-fluid mb-5" src="<?= base_url('assets/img/logo-cu.svg'); ?>" alt="Cuballama" style="max-width: 12rem;">
                                <h1>Cuballama Dashboard</h1>
                                <p class="fw-bold mb-4">
                                    <span class="badge bg-soft-dark fs-4 text-dark">
                                        <?= $TransCU; ?>
                                    </span> 
                                    <span class="text-muted">transacciones pendientes</span>
                                </p>
                                <a class="btn btn-primary" href="<?= base_url('dashboard/cuballama'); ?>">
                                    Dashboard <i class="bi bi-box-arrow-in-right ms-1 fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 order-1 order-md-2 card-transition">
                        <div class="card card-centered shadow-lg mb-3 mb-lg-5">
                            <div class="card-body py-3 my-lg-10">
                                <img class="img-fluid mb-5" src="<?= base_url('assets/img/logo-fm.svg'); ?>" alt="Fonmoney" style="max-width: 15rem;">
                                <h1>Fonmoney Dashboard</h1>
                                <p class="fw-bold mb-4">
                                    <span class="badge bg-soft-dark fs-4 text-dark">
                                        <?= $TransFM; ?>
                                    </span> 
                                    <span class="text-muted"> transacciones pendientes</span>
                                </p>
                                <a class="btn btn-primary" href="<?= base_url('dashboard/fonmoney'); ?>">
                                    Dashboard <i class="bi bi-box-arrow-in-right ms-1 fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 order-2 order-md-3 card-transition">
                        <div class="card card-centered shadow-lg mb-3 mb-lg-5">
                            <div class="card-body py-3 my-lg-10">
                                <img class="img-fluid mb-5" src="<?= base_url('assets/img/oceancard.jpg'); ?>" alt="Oceancard" style="max-width: 12rem;">
                                <h1>Oceancard Dashboard</h1>
                                <p class="fw-bold mb-4">
                                    <span class="badge bg-soft-dark fs-4 text-dark">
                                        <?= $TransOC; ?>
                                    </span> 
                                    <span class="text-muted">transacciones pendientes</span>
                                </p>
                                <a class="btn btn-primary" href="<?= base_url('dashboard/oceancard'); ?>">
                                    Dashboard <i class="bi bi-box-arrow-in-right ms-1 fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </main>
        <!-- ========== END MAIN CONTENT ========== -->
        <footer class="container-lg text-center pb-10">
            <p class="mb-0">&copy; Serconal S.A. de C.V. Todos los derechos reservados.</p>
        </footer>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    </body>
</html>