<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
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
        <link href="<?php echo base_url(); ?>admin_assets/css/icons.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>admin_assets/colors/color1.css" rel="stylesheet" />
        <style type="text/css">
            .navbar-brand {
                min-height: 3rem;
            }
        </style>
    </head>
    <body class="register-1">
        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="text-center mb-5">
                                        <a href="#" class="navbar-brand">
                                            <h4 style="color: #fff;">Ladder Admin</h4>
                                            <!-- <img src="<?php //echo base_url(); ?>admin_assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt=""> -->
                                        </a>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="mt-5">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-text">
                                                        <i class="fe fe-user"></i>
                                                    </div>
                                                    <input type="text" class="username form-control" placeholder="Username">
                                                </div>
                                                <span class="username_error" style="font-size: 12px; color: red; margin-top: -12px; display: none;">Please enter username *</span>
                                                <div class="input-group mb-4">
                                                    <div class="input-group" id="Password-toggle1">
                                                        <a href="#" class="input-group-text">
                                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <input type="password" class="password form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <span class="password_error" style="font-size: 12px; color: red; margin-top: -12px; display: none;">Please enter password *</span>
                                                <div class="form-group text-center mb-3">
                                                    <button type="button" class="login-btn btn btn-primary btn-lg w-100 br-7">Log In</button>
                                                </div>
                                                <div class="error text-center">
                                                    <span class="login_error" style="font-size: 12px; color: red; display: none;"><b>Wrong Username or Password *</b></span>
                                                </div> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" class="base_url" value="<?php echo base_url(); ?>">
        <script src="<?php echo base_url(); ?>admin_assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_assets/js/bootstrap-show-password.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>admin_assets/app/js/login.js?version=1.0"></script>
    </body>

</html>