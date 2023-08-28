<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!$this->session->userdata('m_logged_in')) {
    redirect(base_url());
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta content="ASM Overseas - Admin Panel" name="description">
        <meta content="ASM Overseas" name="author">
        <meta name="keywords" content="">
        <title>ASM Overseas - Admin Panel</title>
        <link href="<?php echo base_url(); ?>admin_assets/images/brand/favicon.ico" rel="icon" type="image/x-icon"/>
        <link href="<?php echo base_url(); ?>admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>admin_assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/css/skin-modes.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/css/animated.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">
        <link href="<?php echo base_url(); ?>admin_assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/css/icons.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>admin_assets/plugins/morris/morris.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/plugins/select2/select2.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/colors/color1.css" rel="stylesheet" id="theme"/>
        <style type="text/css">
            th, td {
                white-space: nowrap;
            }
            div.dataTables_wrapper {
                margin: 0 auto;
            }
            div.container {
                width: 80%;
            }
        </style>
    </head>
    <body class="app sidebar-mini light-mode gradient-header color-menu">
        <div id="global-loader">
            <img src="<?php echo base_url(); ?>admin_assets/images/svgs/loader.svg" alt="loader">
        </div>
        <div class="page">
            <div class="page-main">
                <div class="app-content main-content">
                    <div class="side-app">
                        <?php $this->view('admin/includes/left-menu'); ?>
                        <!--app header-->
                        <div class="app-header header main-header1">
                            <div class="container-fluid">
                                <div class="d-flex">
                                    <a class="header-brand" href="dashboard">
                                        <h4 class="header-brand-img dark-logo" style="color: #fff;">ASM Overseas</h4>
                                        <h4 class="header-brand-img darkmobile-logo" style="color: #fff;">ASM</h4>
                                        <!--<img src="<?php echo base_url(); ?>admin_assets/images/brand/logo.png" class="header-brand-img dark-logo" alt="" />-->
                                        <!--<img src="<?php echo base_url(); ?>admin_assets/images/brand/favicon.png" class="header-brand-img darkmobile-logo" alt="" />-->
                                    </a>
                                    <div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
                                        <a class="open-toggle" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 19h18v2H3zM3 7h12v2H3zm0-4h18v2H3zm0 12h12v2H3zm0-4h18v2H3z"/></svg>
                                        </a>
                                    </div>
                                    <div class="d-flex order-lg-2 ms-auto main-header-end">
                                        <div class="dropdown profile-dropdown d-flex">
                                            <a href="javascript:void(0);" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
                                                <span class="header-avatar1">
                                                    <img src="<?php echo base_url(); ?>admin_assets/images/users/17.jpg" alt="img" class="avatar avatar-md brround">
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-end dropdown-menu-arrow animated">
                                                <div class="text-center">
                                                    <div class="text-center user p-2 font-weight-bold"><i class="fa fa-user-circle-o"></i>&nbsp; ASM Overseas</div>
                                                    <span class="text-center user-semi-title">&nbsp; Admin</span>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item d-flex justify-content-center" href="<?php echo base_url(); ?>logout">
                                                        <div class="fs-13"><i class="fa fa-sign-out"></i>&nbsp; Sign Out</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/app header-->