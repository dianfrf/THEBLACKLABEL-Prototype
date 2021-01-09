<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title><?=$PageTitle;?> | TBL Admin</title>
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/fonts/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/style.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/components.min.css">
    </head>
    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        </ul>
                    </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="<?=base_url()?>Asset/img/avatar-1.png" class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block">Hi, Administrator</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?=base_url('Admin/admin_logout')?>" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="<?=base_url('TBL_Admin');?>">TBL Admin</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="<?=base_url('TBL_Admin');?>">TBL</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">MAIN</li>
                            <li class="<?= ($active == "Dashboard") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('TBL_Admin')?>">
                                    <i class="fas fa-home"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-header">Master Data</li>
                            <li class="<?= ($active == "Artists") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Artists_Data')?>">
                                    <i class="fas fa-user"></i><span>Artists Data</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Albums") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Albums_Data')?>">
                                    <i class="fas fa-user"></i><span>Albums Data</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Songs") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Songs_Data')?>">
                                    <i class="fas fa-user"></i><span>Songs Data</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Videos") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Videos_Data')?>">
                                    <i class="fas fa-user"></i><span>Videos Data</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Awards") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Awards_Data')?>">
                                    <i class="fas fa-user"></i><span>Awards Data</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Films") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Films_Data')?>">
                                    <i class="fas fa-user"></i><span>Filmography Data</span>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="main-content">
                    <?php
                        $this->load->view($content);
                    ?>
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2020 The Black Label<div class="bullet"></div>All Rights Reserved.
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?=base_url()?>Asset/js/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url()?>Asset/modules/tooltip.js"></script>
        <script src="<?=base_url()?>Asset/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>Asset/modules/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?=base_url()?>Asset/js/stisla.js"></script>
        <script src="<?=base_url()?>Asset/js/page/index-0.js"></script>
        <script src="<?=base_url()?>Asset/js/scripts.js"></script>
        <script src="<?=base_url()?>Asset/js/custom.js"></script>
    </body>
</html>
