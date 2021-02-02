  <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                
                                <li class="app-sidebar__heading">Menu</li>
                 
                               <?php if ($this->session->userdata('status_users')=="ADMIN") {?>
                                <li>
                                    <a href="<?php echo base_url('Data/calon'); ?>">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Data Calon
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="<?php echo base_url('Data/desa'); ?>">
                                        <i class="metismenu-icon pe-7s-file"></i>
                                        Data Desa
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo base_url('Data/wilayah'); ?>">
                                        <i class="metismenu-icon pe-7s-file"></i>
                                        Data Kecamatan & Desa
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Data/petugas'); ?>">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Data Petugas
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Data/perhitungan_suara'); ?>">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Data Perhitungan Suara
                                    </a>
                                </li>
                                
                                <!-- <li>
                                    <a href="<?php echo base_url('Data/tps'); ?>">
                                        <i class="metismenu-icon pe-7s-file"></i>
                                        Data Tps
                                    </a>
                                </li> -->
                                 
                               <li>
                                    <a href="">
                                        <span><i class="metismenu-icon pe-7s-info"></i></span>
                                        Informasi
                                        <span></span>
                                    </a>
                                   <ul>
                                        <li>
                                    <a href="<?php echo base_url('Data/kategori'); ?>">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Data Kategori
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Data/informasi_umum'); ?>">
                                        <i class="metismenu-icon pe-7s-info"></i>
                                        Data Informasi Umum
                                    </a>
                                </li>
                                   </ul>
                               </li>
                                
                                <li>
                                    <a href="<?php echo base_url('Data/users'); ?>">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Data Pengguna Sistem
                                    </a>
                                </li>
                               <?php }elseif ($this->session->userdata('status_users')=="PETUGAS") {?>
                                   <li>
                                    <a href="<?php echo base_url('P/data_perhitungan_calon'); ?>">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Data Calon
                                    </a>
                                </li>
                               <?php } ?>
                               
                            </ul>
                        </div>
                    </div>
                </div>