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
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery.loadingModal.css'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>
    <body>
        <main id="content" role="main" class="main">
            <div class="position-fixed top-0 end-0 start-0 bg-img-start" style="height: 32rem; background-image: url(./assets/img/bg-login.svg);">
                <div class="shape shape-bottom zi-1">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
                    </svg>
                </div>
            </div>
            <div class="container py-7 mt-7 mt-md-9">
                <div class="mx-auto" style="max-width: 30rem;">
                    <div class="card card-lg mb-5">
                        <div class="card-body">
                            <form id="formLogin" action="<?= base_url('login/validate-access'); ?>" method="POST" class="needs-validation" novalidate>
                                <div class="text-center">
                                    <div class="mb-5">
                                        <img src="<?= base_url('assets/img/logo.png'); ?>" class="img-fluid mb-3" width="60%">
                                    </div>
                                </div>
                                 <div id="error"></div>
                                <div class="mb-4">
                                    <label class="form-label" for="signinSrEmail">
                                        Username
                                    </label>
                                    <input type="text" class="form-control form-control-lg" name="username" id="username" tabindex="1" placeholder="username" aria-label="username" required>
                                    <span class="invalid-feedback">Please enter a valid username.</span>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                                        Password
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="6">
                                        <a id="changePassTarget" class="input-group-append input-group-text me-2" href="javascript:;">
                                            <i id="changePassIcon" class="bi-eye"></i>
                                        </a>
                                    </div>
                                    <span class="invalid-feedback">Please enter a valid password.</span>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary btn-lg" onclick="login()">
                                        Sign in <i class="bi bi-box-arrow-in-right ms-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <footer class="container-lg text-center pb-10">
                        <p class="mb-0">&copy; Serconal S.A. de C.V. Todos los derechos reservados.</p>
                    </footer>
                </div>
            </div>
        </main>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.loadingModal.js') ?>"></script>
        <script src="<?= base_url('assets/js/login.js?v=1.0.2') ?>"></script>
    </body>
</html>