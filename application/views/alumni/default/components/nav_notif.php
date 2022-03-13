    <?php
        $_query = $this->vw_user_m->get_by(array('user_id' => $this->session->userdata('user_id')));
        foreach ($_query as $value);
    ?>
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="<?php echo base_url("alumni") ?>">
                    <img src="<?php echo $base_assets_url?>images/logo-maarif-.png" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">ma'arif</span>
                </a>
            </div>
            
            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>                        
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="<?php echo base_url($value->img_url)?>" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="<?php echo base_url($value->img_url)?>" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4><?php echo $this->limit_text($this->session->userdata('realname'), 16); ?></h4>
                                                <p class="user-name"><?php echo $retVal = (!empty($this->session->userdata('email'))) ? $this->session->userdata('email') : '-' ; ?></p>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="<?php echo base_url('alumni/profile') ?>"><i class="icon-user"></i>My Profile</a></li>
                                                <li><a href="#defaultModal" data-toggle="modal" data-target="#defaultModal"><i class="icon-settings"></i>Akun</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo base_url('auth/logout') ?>"><i class="icon-power"></i>Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div id="leftsidebar" class="sidebar">
        <div class="sidebar-scroll">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">Main</li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'dashboard') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('alumni') ?>"><i class="icon-home"></i><span>Dashboard</span></a>
                    </li>
                
                    <li class="heading">Alumni</li>
                    
                    <li  <?php echo $active = ($this->router->fetch_class() == 'kegiatan') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('alumni/kegiatan') ?>"><i class="icon-graduation"></i><span>Kegiatan</span></a>
                    </li>
                
                    <li class="heading">Survey</li>

                    <li <?php echo $active = ($this->router->fetch_class() == 'kuesioner') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('alumni/kuesioner') ?>"><i class="icon-bag"></i><span>Kuesioner</span></a>
                    </li>
                
                    <li class="heading">Hasil Survey</li>

                    <li <?php echo $active = ($this->router->fetch_class() == 'kebutuhan') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('alumni/kebutuhan') ?>"><i class="icon-hourglass"></i><span>Kebutuhan</span></a>
                    </li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'kesesuaian') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('alumni/kesesuaian') ?>"><i class="icon-bar-chart"></i><span>Kesesuaian</span></a>
                    </li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'penilaian') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('alumni/penilaian') ?>"><i class="fa fa-bank"></i><span>Penilaian Instansi</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
