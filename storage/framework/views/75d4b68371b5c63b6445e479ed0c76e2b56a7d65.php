<html class="edge"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo e(asset("backend/plugins/bootstrap/css/bootstrap.css")); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo e(asset("backend/plugins/node-waves/waves.css")); ?>" rel="stylesheet">

    <!-- Animation Css -->
    <link href="<?php echo e(asset("backend/plugins/animate-css/animate.css")); ?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo e(asset("backend/css/style.css")); ?>" rel="stylesheet">
</head>

<body class="login-page ls-closed">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Admin<b>BSB</b></a>
        <small>Admin BootStrap Based - Material Design</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="<?php echo e(route("post-login-ad")); ?>" novalidate="novalidate">
                <?php echo csrf_field(); ?>
                <div class="msg">Sign in to start your session</div>
                <?php if(session("error")): ?>
                    <span class="error invalid-feedback" style="color: red"><?php echo e(session("error")); ?></span>





                <?php endif; ?>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input name="email" class="form-control" aria-required="true" autofocus="" required="" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input name="password" class="form-control" aria-required="true" required="" type="password" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">


                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="<?php echo e(route("register")); ?>">Register Now!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo e(asset("backend/plugins/jquery/jquery.min.js")); ?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo e(asset("backend/plugins/bootstrap/js/bootstrap.js")); ?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo e(asset("backend/plugins/node-waves/waves.js")); ?>"></script>

<!-- Validation Plugin Js -->
<script src="<?php echo e(asset("backend/plugins/jquery-validation/jquery.validate.js")); ?>"></script>

<!-- Custom Js -->
<script src="<?php echo e(asset("backend/js/admin.js")); ?>"></script>
<script src="<?php echo e(asset("backend/js/pages/examples/sign-in.js")); ?>"></script>


</body></html>
<?php /**PATH C:\xampp3\htdocs\badboy\resources\views/backend/dang-nhap.blade.php ENDPATH**/ ?>