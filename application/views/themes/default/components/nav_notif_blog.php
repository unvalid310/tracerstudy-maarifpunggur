<style type="text/css" media="screen">
    #menu li .button-stroke a span {
        padding: 5px 15px;
    }
    #Top_bar #menu li .button-stroke a {
        margin: 25px 0;
    }
    #Top_bar.is-sticky #menu li .button-stroke a {
        margin: 10px 0;
    }
</style>

                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="<?php echo base_url()?>" title="BeTheme - Best WordPress Theme Ever">
                                        <img class="scale-with-grid" src="<?php echo $base_assets_url; ?>images/logo-maarif-new.png" />
                                    </a>
                                </div>
                                <!-- Main menu-->
                                <div class="menu_wrapper" style="float: right;">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu">
                                            <li id="menu-item-1354">
                                                <a href="<?php echo base_url('') ?>"><span>Beranda</span></a>
                                            </li>
                                            <li id="menu-item-1690" <?php echo $retVal = ($this->router->fetch_class() == 'berita') ? 'class="current_page_item"' : null ; ?>>
                                                <a href="<?php echo base_url('berita') ?>"><span>Berita</span></a>
                                            </li>
                                            <li id="menu-item-1690" <?php echo $retVal = ($this->router->fetch_class() == 'informasi') ? 'class="current_page_item"' : null ; ?>>
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
                                            <li id="menu-item-1690" style="margin: .25rem .75rem">
                                                <div class="button-stroke flv_sections_16">
                                                    <a class="button button_turquoise button_js" href="<?php echo $base_url ?>">
                                                        <span class="button_label"><?php echo $this->session->userdata('realname')?></span></a>
                                                </div>
                                            </li>
                                            <?php
                                                } else {
                                            ?>
                                            <li id="menu-item-1690" style="margin: .25rem .75rem">
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
            </header>

            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?php echo $breadcrumb ?></h1>
                        <!--BreadCrumbs area-->
                        <ul class="breadcrumbs">
                            <li>
                                <a href="<?php echo base_url() ?>">Beranda</a><span><i class="icon-right-open"></i></span>
                            </li>
                            <li>
                                <a href="<?php echo base_url(strtolower($breadcrumb)) ?>"><?php echo $breadcrumb ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>