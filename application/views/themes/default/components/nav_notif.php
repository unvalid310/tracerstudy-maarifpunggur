
<style type="text/css" media="screen">
    #menu li .button-stroke a span {
        padding: 5px 15px;
    }
    #menu li .button-stroke a {
        margin: 0;
    }
</style>
                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="<?php echo base_url()?>">
                                        <img class="scale-with-grid" src="<?php echo $base_assets_url?>images/logo1.png"/>
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
                                        <span class='themecolor'>Tracer</span> Study SMK N 1
                                        <br> Talang padang
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