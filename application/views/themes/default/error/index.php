<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='<?php echo $base_assets_url;?>css/global.css'>
    <link rel='stylesheet' href='<?php echo $base_assets_url;?>css/structure.css'>
    <link rel='stylesheet' id='style-static' href='<?php echo $base_assets_url;?>css/be_style.css'>
    <link rel='stylesheet' href='<?php echo $base_assets_url;?>css/custom.css'>

</head>

<body class="error404 color-blue layout-full-width header-modern subheader-transparent sticky-header sticky-white subheader-title-left">
    <div id="Error_404">
        <div class="container">
            <div class="column one">
                <div class="error_pic">
                    <i class="icon-traffic-cone"></i>
                </div>
                <div class="error_desk">
                    <h2>Ooops... Error 404</h2>
                    <h4>We are sorry, but the page you are looking for does not exist.</h4>
                    <p>
                        <span class="check">Please check entered address and try again or </span><a class="button button_filled" href="<?php echo base_url();?>">go to homepage</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->

    <script src="<?php echo $base_assets_url;?>js/jquery-2.1.4.min.js"></script>

    <script src="<?php echo $base_assets_url;?>js/mfn.menu.js"></script>
    <script src="<?php echo $base_assets_url;?>js/jquery.plugins.js"></script>
    <script src="<?php echo $base_assets_url;?>js/jquery.jplayer.min.js"></script>
    <script src="<?php echo $base_assets_url;?>js/animations/animations.js"></script>
    <script src="<?php echo $base_assets_url;?>js/email.js"></script>
    <script src="<?php echo $base_assets_url;?>js/scripts.js"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>

</body>

</html>