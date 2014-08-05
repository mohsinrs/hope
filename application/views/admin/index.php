<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>HOPE - Login</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('public/admin/css/bootstrap.min.css') ?>">
        <!-- Bootstrap responsive -->
        <link rel="stylesheet" href="<?php echo base_url('public/admin/css/bootstrap-responsive.min.css') ?>">
        <!-- icheck -->
        <link rel="stylesheet" href="<?php echo base_url('public/admin/css/plugins/icheck/all.css') ?>">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url('public/admin/css/style.css') ?>">
        <!-- Color CSS -->
        <link rel="stylesheet" href="<?php echo base_url('public/admin/css/themes.css') ?>">


        <!-- jQuery -->
        <script src="<?php echo base_url('public/admin/js/jquery.min.js') ?>"></script>

        <!-- Nice Scroll -->
        <script src="<?php echo base_url('public/admin/js/plugins/nicescroll/jquery.nicescroll.min.js') ?>"></script>
        <!-- Validation -->
        <script src="<?php echo base_url('public/admin/js/plugins/validation/jquery.validate.min.js') ?>"></script>
        <script src="<?php echo base_url('public/admin/js/plugins/validation/additional-methods.min.js') ?>"></script>
        <!-- icheck -->
        <script src="<?php echo base_url('public/admin/js/plugins/icheck/jquery.icheck.min.js') ?>"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('public/admin/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('public/admin/js/eakroko.js') ?>"></script>

        <!--[if lte IE 9]>
                <script src="<?php echo base_url('public/admin/js/plugins/placeholder/jquery.placeholder.min.js') ?>"></script>
                <script>
                    $(document).ready(function() {
                            $('input, textarea').placeholder();
                    });
                </script>
        <![endif]-->


        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('public/admin/img/favicon.ico') ?>" />
        <!-- Apple devices Homescreen icon -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('public/admin/img/apple-touch-icon-precomposed.png') ?>" />

    </head>

    <body class='login'>
        <div class="wrapper">
            <h1><a href="#"><img src="<?php echo base_url('public/admin/img/logo-big.png') ?>" alt="" class='retina-ready' width="59" height="49">HOPE</a></h1>
            <div class="login-body">
                <h2>SIGN IN</h2>
                <?php echo renderNotification() ?>
                <form action="<?php echo base_url('admin/index/process') ?>" method='post' class='form-validate' id="frmLogin">
                    <div class="control-group">
                        <div class="email controls">
                            <input type="text" name='email' placeholder="User Name" class='input-block-level' data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="pw controls">
                            <input type="password" name="password" placeholder="Password" class='input-block-level' data-rule-required="true">
                        </div>
                    </div>
                    <div class="submit">
                        <div class="remember">
                            <input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember" value="1"> <label for="remember">Remember me</label>
                        </div>
                        <input type="submit" value="Sign in" class='btn btn-primary'>
                    </div>
                </form>
                <div class="forget">
                    <a href="<?php echo base_url('admin/index/forgot') ?>"><span>Forgot password?</span></a>
                </div>
            </div>
        </div>
    </body>
</html>