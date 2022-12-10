<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Login Page</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('evisa/gr/assets/img/favicon.ico')); ?>" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('evisa/gr/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('evisa/gr/assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('evisa/gr/assets/css/structure.css')); ?>" rel="stylesheet" type="text/css" class="structure" />
    <link href="<?php echo e(asset('evisa/gr/assets/css/authentication/form-2.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('evisa/gr/assets/css/forms/theme-checkbox-radio.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('evisa/gr/assets/css/forms/switches.css')); ?>">
</head>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Connexion</h1>
                        <p class="">Connectez-vous à votre compte pour continuer.</p>
                        <img src="<?php echo e(asset('evisa/gr/assets/img/logo.jpeg')); ?>" class="navbar-logo" alt="logo" width="90px">
                        <form class="text-left" class="login100-form validate-form" method="POST" action="<?php echo e(route('login.gr')); ?>" aria-label="Login">
                                <?php echo csrf_field(); ?>
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">USERNAME</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" type="text" class="form-control" name="email" placeholder="">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">MOT DE PASSE</label>
                                        <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Mot de passe oublié?
                                        </a>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" name="password" class="form-control" placeholder="********">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Connexion</button>
                                    </div>
                                </div>
                                <!--
                                <p class="signup-link">Not registered ? <a href="auth_register_boxed.html">Create an account</a></p>
                                -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('evisa/gr/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('evisa/gr/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('evisa/gr/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('evisa/gr/assets/js/authentication/form-2.js')); ?>"></script>

</body>

</html>