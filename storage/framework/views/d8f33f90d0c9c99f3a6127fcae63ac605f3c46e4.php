<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from laravel.spruko.com/solic/Horizontal-Light-ltr/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 16:37:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="In a world that is constantly changing,we are the best and the most reliable partners.you are a person or company Galaxy is the privileged place for great achievements our specilized team focuses on using the best technology to achieve your dreqms and make them a reality." name="description">
		<!--favicon -->
<link rel="icon" href="" type="image/x-icon"/>
<link rel="shortcut icon" href="" type="image/x-icon"/>
<!-- TITLE -->
<title>Evisa</title>
<!-- DASHBOARD CSS -->
<link href="<?php echo e(asset('assets/css/dashboard.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('assets/css/dashboard-dark.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('assets/css/style-modes.css')); ?>" rel="stylesheet"/>
<!-- HORIZONTAL-MENU CSS -->
<link href="<?php echo e(asset('assets/plugins/horizontal-menu/dropdown-effects/fade-down.css')); ?>" rel="stylesheet">
<!--C3.JS CHARTS PLUGIN -->
<link href="<?php echo e(asset('assets/plugins/charts-c3/c3-chart.css')); ?>" rel="stylesheet"/>
<!-- SINGLE-PAGE CSS -->
<link href="<?php echo e(asset('assets/plugins/single-page/css/main.css')); ?>" rel="stylesheet" type="text/css">
<!-- PERFECT SCROLL BAR CSS-->
<link href="<?php echo e(asset('assets/plugins/pscrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet"/>
<!-- SELECT2 CSS -->
<!-- Skin css-->
<link href="<?php echo e(asset('assets/skins/skins-modes/color22.css')); ?>"  id="theme" rel="stylesheet" type="text/css" media="all" />
<!-- SIDEBAR CSS -->

<!-- Switcher CSS -->
</head>
<link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>

		
	<body class="default-header">	    
		<div class="login-img">
			<div id="global-loader"></div>
			<div class="page">
				<div class="">
					<div class="col col-login mx-auto">
						<div class="text-center">
                            <!-- <img src="<?php echo e(asset('log.png')); ?>" width="150px"/> -->
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							
                            <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>" aria-label="Login">
                                <?php echo csrf_field(); ?>
                                <span class="login100-form-title">
									Connexion 
								</span>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <label>Email : </label>
                                <input id="email"  type="text" class="form-control" name="email" value="" required autofocus>
									<span class="focus-input100"></span>
									<span class="symbol-input100">
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <label>Mot de passe: </label>
                                <input id="password" type="password" class="form-control" name="password" required>
										<span class="focus-input100"></span>
									<span class="symbol-input100">
									</span>
								</div>
								<div class="container-login100-form-btn">
									<button type="submit" href="#" class="login100-form-btn btn-primary">
                                        <i class="fa fa-door-open"></i>Connexion
									</button>
								</div>
								<p>
									Vous n'avez pas encore un comtpe ?
									<a href="<?php echo e(route('register')); ?>"> S'enregistrer .</a>

								</p>
								<br>
								<a href="<?php echo e(route('forget.password')); ?>">
									Mot de passe Oublié ?
								</a>

							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
		
		<!-- JQUERY SCRIPTS -->
<script src="<?php echo e(asset('assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo e(asset('assets/js/vendors/bootstrap.bundle.min.js')); ?>"></script>
<!-- SPARKLINE -->
<script src="<?php echo e(asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
<!-- CUSTOM JS-->
<script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>	

<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>	
<script>
        <?php if($errors->any()): ?>
        $(function(){
                toastr.error('<?php echo e($errors->first()); ?>')
            })

        <?php endif; ?>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(Session::get("success")); ?>')
        <?php endif; ?>
</script>

	</body>

</html>