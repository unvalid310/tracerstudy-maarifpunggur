<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
    
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>:: Tracer Study Ma'arif Punggur ::</title>
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
    
    #menu li .button-stroke a span {
        padding: 5px 15px;
    }
    #menu li .button-stroke a {
        margin: 0;
    }
</style>
<body class="page-parent template-slider color-blue layout-full-width header-transparent sticky-header sticky-white subheader-title-left">
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">

            <!-- Header -->
            <header id="Header">

                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="<?php echo base_url()?>" title="BeTheme - Best WordPress Theme Ever">
                                        <img class="scale-with-grid" src="<?php echo $base_assets_url?>images/logo-maarif-new.png"/>
                                    </a>
                                </div>

                                <!-- Main menu-->
                                <div class="menu_wrapper" style="float: right;">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu">
                                            <li id="menu-item-1354 current-menu-item" class="current_page_item">
                                                <a href="<?php echo base_url() ?>"><span>Beranda</span></a>
                                            </li>
                                            <li id="menu-item-1690">
                                                <a href="<?php echo base_url('berita') ?>"><span>Berita</span></a>
                                            </li>
                                            <li id="menu-item-1690">
                                                <a href="<?php echo base_url('informasi') ?>"><span>Informasi</span></a>
                                            </li>
                                            <?php 
                                                if(!empty($this->session->userdata('realname'))){ 
                                        			if ($this->session->userdata('is_role') == '1') {
                                        				# code...
                                                    	$base_url 	= base_url('cms-admin');
                                        			} else if ($this->session->userdata('is_role') == '2') {
                                        				# code...
                                                    	$base_url 	= base_url('alumni');
                                        			} else if ($this->session->userdata('is_role') == '3') {
                                        				# code...
                                                    	$base_url 	= base_url('instansi');
                                        			}
                                            ?>
                                            <li id="menu-item-1690" style="margin: .85rem .80rem">
                                                <div class="button-stroke flv_sections_16">
                                                    <a class="button button_turquoise button_js" href="<?php echo $base_url ?>">
                                                        <span class="button_label"><?php echo $this->session->userdata('realname')?></span></a>
                                                </div>
                                            </li>
                                            <?php
                                                } else {
                                            ?>
                                            <li id="menu-item-1690" style="margin: .85rem .80rem">
                                                <div class="button-stroke flv_sections_16">
                                                    <a class="button button_turquoise button_js" href="<?php echo base_url('auth') ?>"><span class="button_label">Login</span></a>
                                                </div>
                                            </li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Revolution slider area-->
                <div class="mfn-main-slider" id="mfn-rev-slider">
                    <div id="rev_slider_34_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container flv_rev_14">
                        <div id="rev_slider_34_2" class="rev_slider fullwidthabanner flv_rev_13">
                            <ul>
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-thumb="images/slide-home-2-thumb.jpg" data-saveperformance="off">
                                    <img src="<?php echo $base_assets_url?>images/slide-home-2-bg.jpg" alt="slide-home-2-bg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption large_dark sft tp-resizeme flv_rev_4" data-x="center" data-hoffset="-324" data-y="center" data-voffset="-78" data-speed="500" data-start="1000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                        <span class='themecolor'>Tracer</span> Study MA'ARIF 
                                        <br> PUNGGUR
                                    </div>

                                    <div class="tp-caption mfnrs_home_small sfl tp-resizeme flv_rev_2" data-x="center" data-hoffset="-387" data-y="center" data-voffset="48" data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">
                                        <span class="flv_rev_3">The easiest way to build different sites
                                            <br>
                                            without many themes</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </header>

            </header>
        </div>
            
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <!-- section welcome -->
                        <div class="section flv_sections_1" id="ecommerce_ready">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Page Title-->
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomInLeftLarge">
                                                <h2 class="title">Selamat Datang, di TRACER STUDY</h2>
                                                <h2 class="title">MA'ARIF PUNGGUR</h2>
                                                <div class="inside">
                                                    <span class="big">Pelacakan jejak lulusan/alumni yang dilakukan kepada alumni setelah lulus dari jenjang pendidikan.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list">
                                        <div class="list_item lists_3 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInLeft">
                                                <div class="list_left list_icon">
                                                    <i class="icon-tag"></i>
                                                </div>
                                                <div class="list_right">
                                                    <h4>Berita</h4>
                                                    <div class="desc">
                                                        Informasi mengenai perkembangan/kegiatan yang berkaitan dengan sekolah dan informasi lainnya.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list">
                                        <div class="list_item lists_3 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInRight">
                                                <div class="list_left list_icon">
                                                    <i class="icon-picture"></i>
                                                </div>
                                                <div class="list_right">
                                                    <h4>Informasi</h4>
                                                    <div class="desc">
                                                        Menyediakan sarana informasi tentang kebutuhan yang diinginkan oleh alumni meliputi informasi lowongan pekerjaan, seminar ataupun lainnya.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider">
                                        <hr class="no_line" />
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list">
                                        <div class="list_item lists_3 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInLeft">
                                                <div class="list_left list_icon">
                                                    <i class="icon-chart-line"></i>
                                                </div>
                                                <div class="list_right">
                                                    <h4>Kuesioner</h4>
                                                    <div class="desc">
                                                        Survey dilakukan untuk mengetahui kebutuhan alumni, kesesuaian berdasarkan pekerjaan, jenjang perkuliahan maupun dunia usaha.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_list">
                                        <div class="list_item lists_3 clearfix">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInRight">
                                                <div class="list_left list_icon">
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div class="list_right">
                                                    <h4>Penilaian Instansi</h4>
                                                    <div class="desc">
                                                        Penilaian instansi untuk mengetahui kualitas terhadap lulusan SMK Negeri 1.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one column_divider">
                                    <hr/>
                                </div>
                            </div>
                        </div>

                        <!-- section Infographic -->
                        <div class="section flv_sections_5">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Page Title-->
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">Infographic kegiatan alumni setelah lulus </h2>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <!-- Animated area -->
                                            <div class="animate bounceIn" data-anim-type="bounceIn">
                                                <div class="number" data-to="400">400</div>
                                                <h3 class="title">Bekerja</h3>
                                                <hr class="hr_narrow">
                                                <div class="desc"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <!-- Animated area -->
                                            <div class="animate bounceIn" data-anim-type="bounceIn">
                                                <div class="number" data-to="200">200</div>
                                                <h3 class="title">Kuliah</h3>
                                                <hr class="hr_narrow">
                                                <div class="desc"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <!-- Animated area -->
                                            <div class="animate bounceIn" data-anim-type="bounceIn">
                                                <div class="number" data-to="9518">9518</div>
                                                <h3 class="title">Wirausaha</h3>
                                                <hr class="hr_narrow">
                                                <div class="desc"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fourth column_quick_fact">
                                        <!-- Counter area-->
                                        <div class="quick_fact animate-math">
                                            <!-- Animated area -->
                                            <div class="animate bounceIn" data-anim-type="bounceIn">
                                                <div class="number" data-to="21">21</div>
                                                <h3 class="title">Lainnya</h3>
                                                <hr class="hr_narrow">
                                                <div class="desc"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- section chart --> 
                        <div class="section" id="ecommerce_ready" style="padding-top: 50px;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomInLeftLarge">
                                                <h2 class="title">Statistik Lulusan</h2>
                                                <div class="inside">
                                                    <span class="big">Informasi lulusan MA'ARIF PUNGGUR per-tahun.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Two Third (2/3) Column -->
                                    <div class="column one column_column">
                                        <div class="column_attr ">
                                            <div id="multiple-chart" class="ct-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one column_divider">
                                    <hr/>
                                </div>
                            </div>
                        </div>
                        
                        <!-- recent page -->
                        <div class="section section-post-related" id="ecommerce_ready" style="padding-top: 50px;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Third (1/3) Column -->
                                    <div class="column one-third column_column">
                                        <div class="column one column_column" style="margin-bottom: 10px">
                                            <div class="column_attr ">
                                                <h3 class="flv_style_4">Informasi</h3>
                                            </div>
                                        </div>
                                        <div class="column one column_divider" style="padding-bottom: 20px">
                                            <hr>
                                        </div>
                                        <div class="column one column_column">
                                            <?php
                                                $_query = $this->vw_informasi_m->get_limit(array('is_publish' => '1'), 3, 0);
                                                if (count($_query) > 0) {
                                                    # code...
                                                    foreach ($_query as $key => $value) {
                                                        # code...
                                            ?>
                                            <div class="icon_box icon_position_left has_border">
                                                <a href="<?php echo base_url('view/informasi/'.$value->page_id) ?>">
                                                    <div class="image_wrapper"><img src="<?php echo base_url($value->img_url)?>" alt="Curabitur ipsum" class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4><?php echo $this->limit_text($value->judul, 50); ?></h4>
                                                    </div>
                                                </a>
                                            </div>  
                                            <?php
                                                    }
                                                }
                                            ?>
                                            <div class="icon_box icon_position_left" style="padding-top: 0">
                                                <a class="mfn-link mfn-link-4 " href="<?php echo base_url('informasi') ?>" data-hover="Phasellus" style="margin: 0"><span data-hover="Phasellus">Tamplikan semua</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Two Third (2/3) Column -->
                                    <div class="column two-third column_column">
                                        <div class="column one column_column" style="margin-bottom: 10px">
                                            <div class="column_attr ">
                                                <h3 class="flv_style_4">Berita Terbaru</h3>
                                            </div>
                                        </div>
                                        <div class="column one column_divider" style="padding-bottom: 20px">
                                            <hr>
                                        </div>
                                        <?php
                                            $_query = $this->vw_berita_m->get_limit(array('is_publish' => '1'), 2, 0);
                                            if (count($_query) > 0) {
                                                # code...
                                                foreach ($_query as $value) {
                                                    # code...
                                        ?>
                                        <!-- One Third (1/2) Column -->
                                        <div class="column one-second post-related post-175 post  format-standard has-post-thumbnail  category-motion category-photography category-uncategorized tag-eclipse tag-grid tag-mysql">
                                            <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="<?php echo base_url('view/berita/'.$value->page_id) ?>">
                                                        <div class="mask"></div><img height="450" src="<?php echo base_url($value->img_url) ?>" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="date_label">
                                                <?php echo $value->publish_datenya ?>
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <a href="<?php echo base_url('view/berita/'.$value->page_id) ?>">
                                                        <?php echo $this->limit_text($value->judul, 40); ?>
                                                    </a>
                                                </h4>
                                                <hr class="hr_color" style="margin-left: 0px" />
                                                <div class="post-excerpt">
                                                    <span class="big"><?php echo $this->limit_text($value->content, 280); ?></span>
                                                </div>
                                                <a class="mfn-link mfn-link-4 " href="<?php echo base_url('view/berita/'.$value->page_id) ?>" data-hover="Phasellus" style="margin: 0"><span data-hover="Phasellus">Selengkapnya</span></a>
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>

                                    <div class="column one column_divider" style="padding-bottom: 20px">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- One full width row-->
                        <div class="column one column_testimonials" style="padding-top: 40px">
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="zoomInLeftLarge">
                                        <h2 class="title">Ulasan perusahaan</h2>
                                        <div class="inside">
                                            <span class="big">Pelacakan jejak lulusan/alumni yang dilakukan kepada alumni setelah lulus dari jenjang pendidikan.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_slider" style="padding-top: 30px">
                                    <?php
                                        $_query = $this->vw_testimoni_m->get_by(array('is_publish' => '1'));
                                        if (count($_query) > 0) {
        
                                    ?>
                                    <ul class="testimonials_slider_ul">
                                        <?php  
                                            foreach ($_query as $key => $value) {
                                                # code...
                                        ?>
                                        <li>
                                            <div class="bq_wrapper">
                                                <blockquote>
                                                    <?php echo $value->saran ?>
                                                </blockquote>
                                            </div>
                                            <div class="hr_dots hrmargin_b_10">
                                                <span></span><span></span><span></span>
                                            </div>
                                            <div class="author">
                                                <h5><a href="#"><?php echo $value->responden ?></a></h5><span class="company"><?php echo $value->realname ?></span>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
                                            <a href="<?php echo base_url('view/berita/'.$value->page_id) ?>">
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