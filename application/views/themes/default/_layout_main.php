<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>:: Tracer Study Ma'arif Punggur ::</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='<?php echo $base_assets_url?>css/global.css'>
    <link rel='stylesheet' href='<?php echo $base_assets_url?>css/structure.css'>
    <link rel='stylesheet' id='style-static' href='<?php echo $base_assets_url?>css/be_style.css'>
    <link rel='stylesheet' href='<?php echo $base_assets_url?>css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="<?php echo $base_assets_url?>plugins/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo $base_assets_url?>plugins/chartists/chartist.min.css">

</head>
<style type="text/css" media="screen">
    .slogan {
        color: #444444ad !important;
    }
    .phone {
        color: #444444ad !important;
    }
    .mail {
        color: #444444ad !important;
    }

    .ct-series-a .ct-line,
    .ct-series-a .ct-point {
        stroke: #6ebdd1;
    }

    .ct-series-b .ct-line,
    .ct-series-b .ct-point {
        stroke: #f9ab6c;
    }

    .ct-series-c .ct-line,
    .ct-series-c .ct-point {
        stroke: #afc979;
    }

    .ct-series-d .ct-line,
    .ct-series-d .ct-point {
        stroke: #AB7DF6;
    }

    .ct-series-e .ct-line,
    .ct-series-e .ct-point {
        stroke: #5cc196;
    }

    .ct-series-f .ct-line,
    .ct-series-f .ct-point {
        stroke: #d17905;
    }

    .ct-series-g .ct-line,
    .ct-series-g .ct-point {
        stroke: #453d3f;
    }

    .ct-series-h .ct-line,
    .ct-series-h .ct-point {
        stroke: #59922b;
    }

    .ct-series-i .ct-line {
        stroke: #0544d3;
    }

    .ct-series-j .ct-line {
        stroke: #6b0392;
    }

    .ct-series-k .ct-line {
        stroke: #f05b4f;
    }

    .ct-series-l .ct-line {
        stroke: #dda458;
    }

    .ct-series-m .ct-line {
        stroke: #eacf7d;
    }

    .ct-series-n .ct-line {
        stroke: #86797d;
    }

    .ct-series-o .ct-line {
        stroke: #b2c326;
    }
</style>
<?php 
    $css = 'blog with_aside aside_right color-blue layout-full-width header-modern sticky-header sticky-white subheader-title-left';
    $nav_bar = $sidebar_blog;
?>

<body class="blog with_aside aside_right color-blue layout-full-width header-modern sticky-header sticky-white subheader-title-left">
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">

            <!-- Header -->
            <header id="Header">

                <?php echo $sidebar_blog ?>

            </header>
        </div>
            
        <?php echo $content ?>

        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper">
                <div class="container">
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-second">
                        <!-- Text Area -->
                        <aside id="text-7" class="widget widget_text">
                            <div class="textwidget">
                                <p>
                                    <span class="big">We love who we are and we are very proud to be the part of your business</span>
                                </p>
                                <p>
                                    Curabitur sit amet magna quam. Praesent in libero vel <span class="tooltip" data-tooltip="Quis accumsan dolor">turpis pellentesque</span> egestas sit amet vel nunc. Nunc lobortis dui neque quis.
                                </p>
                                <a href="#" class="icon_bar icon_bar_facebook icon_bar_small">
                                    <span class="t"><i class="icon-facebook"></i></span>
                                    <span class="b"><i class="icon-facebook"></i></span>
                                </a>
                                <a href="#" class="icon_bar icon_bar_google icon_bar_small">
                                    <span class="t"><i class="icon-gplus"></i></span>
                                    <span class="b"><i class="icon-gplus"></i></span>
                                </a>
                                <a href="#" class="icon_bar icon_bar_twitter icon_bar_small">
                                    <span class="t"><i class="icon-twitter"></i></span>
                                    <span class="b"><i class="icon-twitter"></i></span>
                                </a>
                                <a href="#" class="icon_bar icon_bar_instagram icon_bar_small">
                                    <span class="t"><i class="icon-instagram"></i></span>
                                    <span class="b"><i class="icon-instagram"></i></span>
                                </a>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-second">
                        <!-- One Fourth (1/4) Column -->
                        <div class="column one-second">
                            <!-- Recent posts -->
                            <aside class="widget widget_mfn_recent_posts" style="padding-right: 20px">
                                <h4>Berita Terbaru</h4>
                                <div class="Recent_posts">
                                    <ul>
                                        <?php
                                            $_query = $this->vw_berita_m->get_limit(array('is_publish' => '1'), 2, 0);
                                            if (count($_query) > 0) {
                                                # code...
                                                foreach ($_query as $value) {
                                                    # code...
                                        ?>
                                        <li class="post ">
                                            <a href="<?php echo base_url('berita/id/'.$value->page_id) ?>">
                                                <div class="photo"><img src="<?php echo base_url($value->img_url) ?>" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2"  style="height: 100% !important; object-fit: cover;"/>
                                                </div>
                                                <div class="desc">
                                                    <h6><?php echo $this->limit_text($value->judul, 20); ?></h6><span class="date"><i class="icon-clock"></i><?php echo $value->publish_datenya ?></span>
                                                </div>
                                            </a>
                                        </li>
                                        <?php 
                                                }
                                            } 
                                        ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <!-- One Fourth (1/4) Column -->
                        <div class="column one-second">
                            <!-- Recent Comments Area -->
                            <aside class="widget widget_mfn_recent_comments" style="padding-left: 20px">
                                <h4>Profile</h4>
                                <div class="Recent_comments">
                                    <ul>
                                        <li>
                                            <p style="padding-top: 10px">
                                                <i class="icon-location-line"></i> Sidomulyo, Tanggul Angin, Punggur, Kabupaten Lampung Tengah, Lampung 34152
                                            </p>
                                        </li>
                                        <li>
                                            <p style="padding-top: 10px">
                                                <i class="icon-phone"></i> (0725) 7522080
                                            </p>
                                        </li>
                                        <li>
                                            <p style="padding-top: 10px">
                                                <i class="icon-mail-line"></i> noreply@email.com
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright">
                            &copy; 2020 Tracerstudy - MA'ARIF PUNGGUR
                        </div>
                        <!--Social info area-->
                        <ul class="social">
                            <li class="facebook">
                                <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
                            </li>
                            <li class="googleplus">
                                <a href="#" title="Google+"><i class="icon-gplus"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#" title="Vimeo"><i class="icon-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS -->

    <script src="<?php echo $base_assets_url?>js/jquery-2.1.4.min.js"></script>

    <script src="<?php echo $base_assets_url?>js/mfn.menu.js"></script>
    <script src="<?php echo $base_assets_url?>js/jquery.plugins.js"></script>
    <script src="<?php echo $base_assets_url?>js/jquery.jplayer.min.js"></script>
    <script src="<?php echo $base_assets_url?>js/animations/animations.js"></script>
    <script src="<?php echo $base_assets_url?>js/email.js"></script>
    <script src="<?php echo $base_assets_url?>js/scripts.js"></script>
    <script src="<?php echo $base_assets_url?>js/chartist.bundle.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/chartist-plugin-legend-latest/chartist-plugin-legend.js"></script>

    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/chartists/chartist.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo $base_assets_url?>plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi34;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_34_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_34_2");
            } else {
                revapi34 = tpj("#rev_slider_34_2").show().revolution({
                    sliderType: "standard",

                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 7000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: false,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 90,
                                v_offset: 40
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 40,
                                v_offset: 40
                            }
                        },
                        thumbnails: {
                            style: "hesperiden",
                            enable: false,
                            width: 200,
                            height: 80,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "transparent",
                            wrapper_opacity: "1",
                            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">Slide</span>',
                            visibleAmount: 3,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 40,
                            v_offset: 40
                        }
                    },
                    gridwidth: 1180,
                    gridheight: 750,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "on",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
    </script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
            }
            jQuery.ajax({
                type: "POST",
                url: '<?php echo base_url('api/rest_chart/chart_kegiatan') ?>',
                dataType: "JSON",
                success: function(data) { 
                    var myArray = data.value;
                    var maxValueInArray = Math.max.apply(Math, myArray);
                    var options =  {
                            height: "310px",
                            low: 0,
                            high: 'auto',
                            series: {
                                showPoint: true,
                            },
                            axisY: {
                                type: Chartist.AutoScaleAxis,
                                onlyInteger: true,
                                high: maxValueInArray+1,
                                labelInterpolationFnc: function(value) {
                                    return value;
                                }
                            },
                            options: {
                                responsive: true
                            }
                        };

                    new Chartist.Line(
                        '#multiple-chart', 
                        data,
                        options
                    );
                }
            });
        });
    </script>

</body>

</html>