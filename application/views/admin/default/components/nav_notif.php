    <?php
        $_query = $this->vw_admin_m->get_by(array('user_id' => $this->session->userdata('user_id')));
        foreach ($_query as $value);
    ?>
    
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="<?php echo base_url("cms-admin") ?>">
                    <img src="<?php echo $base_assets_url?>images/maarif_img.png" alt="Mplify Logo" class="img-responsive logo">
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
                    <li <?php echo $active = ($this->router->fetch_class() == 'dashboard') ? 'class="active"' : null ; ?>><a href="<?php echo base_url('cms-admin') ?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
                
                    <li class="heading">Alumni</li>
                    
                    <li  <?php echo $active = ($this->router->fetch_class() == 'alumni') ? 'class="active"' : null ; ?>>
                        <a href="#uiElements" class="has-arrow"><i class="icon-graduation"></i><span>Data Alumni</span></a>
                        <ul>
                            <li <?php echo $active = ($breadcrumb == 'Tambah Alumni' && ($breadcrumb == 'Tambah Alumni' || $breadcrumb == 'Update Alumni')) ? 'class="active"' : null ; ?>>
                                <a href="<?php echo base_url("cms-admin/alumni/create") ?>">Tambah Alumni</a>
                            </li>
                            <li <?php echo $active = ($this->router->fetch_class() == 'alumni' && $breadcrumb == 'Daftar Alumni') ? 'class="active"' : null ; ?>>
                                <a href="<?php echo base_url("cms-admin/alumni") ?>">Daftar Alumni</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'alumni_tools') ? 'class="active"' : null ; ?>>
                        <a href="#uiElements" class="has-arrow"><i class="icon-settings"></i><span>Tools</span></a>
                        <ul>
                            <li <?php echo $active = ($breadcrumb == 'Daftar Jurusan') ? 'class="active"' : null ; ?>>
                                <a href="<?php echo base_url("cms-admin/alumni/tool/jurusan") ?>">Jurusan</a>
                            </li>
                            <li <?php echo $active = ($breadcrumb == 'Import Data Alumni') ? 'class="active"' : null ; ?>>
                                <a href="<?php echo base_url("cms-admin/alumni/tool/import") ?>">Import Data</a>
                            </li>
                        </ul>
                    </li>

                    <li class="heading">Instansi</li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'instansi') ? 'class="active"' : null ; ?>><a href="<?php echo base_url('cms-admin/instansi') ?>"><i class="fa fa-institution"></i><span>Daftar Instansi</span></a></li>
                    
                    <li class="heading">Kuesioner</li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'kues_alumni') ? 'class="active"' : null ; ?>>
                        <a href="#uiElements" class="has-arrow"><i class="icon-notebook"></i><span>Kuesioner Alumni</span></a>
                        <ul>
                            <li <?php echo $active = ($breadcrumb == 'Daftar Kategori') ? 'class="active"' : null ; ?>>
                                <a href="<?php echo base_url("cms-admin/kuesioner-alumni/kategori") ?>">Kategori</a>
                            </li>
                            <li <?php echo $active = ($breadcrumb == 'Daftar Kuesioner') ? 'class="active"' : null ; ?>>
                                <a href="<?php echo base_url("cms-admin/kuesioner-alumni/kuesioner") ?>">Kuesioner</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="heading">Pengguna</li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'user') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('cms-admin/pengguna') ?>"><i class="icon-user"></i><span>Daftar Pengguna</span></a>
                    </li>

                    <li class="heading">Content</li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'berita') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('cms-admin/berita') ?>"><i class="icon-tag"></i><span>Berita</span></a>
                    </li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'informasi') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('cms-admin/informasi') ?>"><i class="icon-info"></i><span>Informasi</span></a>
                    </li>

                    <li class="heading">Pengaturan</li>
                    <li <?php echo $active = ($this->router->fetch_class() == 'admin') ? 'class="active"' : null ; ?>>
                        <a href="<?php echo base_url('cms-admin/admin') ?>"><i class="icon-user"></i><span>Daftar admin</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
