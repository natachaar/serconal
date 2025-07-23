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
    <body>

        <main id="content" role="main" class="main">
            <div class="position-fixed top-0 end-0 start-0 bg-img-start" style="height: 32rem; background-image: url(./assets/img/bg-login.svg);">
                <!-- Shape -->
                <div class="shape shape-bottom zi-1">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
                    </svg>
                </div>
                <!-- End Shape -->
            </div>

            <!-- Content -->
            <div class="container py-7 mt-7 mt-md-9">
                <div class="mx-auto" style="max-width: 30rem;">
                    <!-- Card -->
                    <div class="card card-lg mb-5">
                        <div class="card-body">
                            <!-- Form -->
                            <form class="js-validate needs-validation" novalidate>
                                <div class="text-center">
                                    <div class="mb-5">
                                        <img src="./assets/img/logo.png" class="img-fluid mb-3" width="60%">
                                    </div>
                                </div>

                                <!-- Form -->
                                <div class="mb-4">
                                    <label class="form-label" for="signinSrEmail">Username</label>
                                    <input type="text" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="username" aria-label="username" required>
                                    <span class="invalid-feedback">Please enter a valid username.</span>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                                        <span class="d-flex justify-content-between align-items-center">
                                            <span>Password</span>
                                            <a class="form-label-link mb-0" href="./authentication-reset-password-basic.html">Forgot Password?</a>
                                        </span>
                                    </label>

                                    <div class="input-group input-group-merge" data-hs-validation-validate-class>
                                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                                               "target": "#changePassTarget",
                                               "defaultClass": "bi-eye-slash",
                                               "showClass": "bi-eye",
                                               "classChangeTarget": "#changePassIcon"
                                               }'>
                                        <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                                            <i id="changePassIcon" class="bi-eye"></i>
                                        </a>
                                    </div>

                                    <span class="invalid-feedback">Please enter a valid password.</span>
                                </div>
                                <!-- End Form -->

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Footer -->
                    <footer class="container-lg text-center pb-10">
                        <p class="mb-0">&copy; Serconal S.A. de C.V. Todos los derechos reservados.</p>
                    </footer>
                    <!-- End Footer -->
                </div>
            </div>
            <!-- End Content -->
        </main>


        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    </body>
</html>