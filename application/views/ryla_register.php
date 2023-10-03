<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Loader start -->
    <div class="loader-wrapper">
        <div class="row loader-img">
            <div class="col-12">
                <img src="../assets/images/loader/loader-2.gif" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- Loader end -->
    
    <div class="page-wrapper">

        <!-- page header start -->
        <div class="page-main-header row">
            <div id="sidebar-toggle" class="toggle-sidebar col-auto">
                <i data-feather="chevrons-left"></i>
            </div>
            
            <div class="nav-right col p-0">
                <ul class="header-menu">
                    <li>
                        <div class="d-md-none mobile-search">
                            <i data-feather="search"></i>
                        </div>
                        <div class="form-group search-form">
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>
                    <li class="onhover-dropdown">
                        <a href="javascript:void(0)">
                            <i data-feather="save"></i>
                        </a>
                        <div class="notification-dropdown onhover-show-div">
                            <div class="dropdown-title">
                                <h6>Recent Attachments</h6>
                                <a href="reports.html">Show all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-success-light">
                                            <i class="fas fa-file-word"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="reports.html">
                                                <h6>Doc_file.doc</h6>
                                            </a>
                                            <span>800MB</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-primary-light">
                                            <i class="fas fa-file-image"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="reports.html">
                                                <h6>Apartment.jpg</h6>
                                            </a>
                                            <span>500kb</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-warning-light">
                                            <i class="fas fa-file-pdf"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="reports.html">
                                                <h6>villa_report.pdf</h6>
                                            </a>
                                            <span>26MB</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="onhover-dropdown notification-box">
                        <a href="javascript:void(0)">
                            <i data-feather="bell"></i>
                            <span class="label label-shadow label-pill notification-badge">3</span>
                        </a>
                        <div class="notification-dropdown onhover-show-div">
                            <div class="dropdown-title">
                                <h6>Notifications</h6>
                                <a href="favourites.html">Show all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-primary-light">
                                            <i class="fab fa-xbox"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Item damaged</h6>
                                            <span>8 hours ago, Tadawis 24</span>
                                            <p class="mb-0">"the table is broken:("</p>
                                            <ul class="user-group">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/4.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li class="reply">
                                                    <a href="javascript:void(0)">
                                                        Reply
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-success-light">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Payment received</h6>
                                            <span>2 hours ago, Bracka 15</span>
                                            <ul class="user-group">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/1.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/2.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/3.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-warning-light">
                                            <i class="fas fa-comment-dots"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>New inquiry</h6>
                                            <span>1 Days ago, Krowada 7</span>
                                            <p class="mb-0">"is the villa still available?"</p>
                                            <ul class="user-group">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/2.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/3.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li class="reply">
                                                    <a href="javascript:void(0)">
                                                        Reply
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="onhover-dropdown">
                        <a href="javascript:void(0)">
                            <i data-feather="mail"></i>
                        </a>
                        <div class="notification-dropdown chat-dropdown onhover-show-div">
                            <div class="dropdown-title">
                                <h6>Messages</h6>
                                <a href="user-profile.html">View all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Bob Frapples</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status online">online</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Greta Life</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status away">Away</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Greta Life</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status online">online</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/7.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Greta Life</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status busy">Busy</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="profile-avatar onhover-dropdown">
                        <div>
                            <img src="../assets/images/avatar/3.jpg" class="img-fluid" alt="">
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><span>Account </span><i data-feather="user"></i></a></li>
                            <li><a href="listing.html"><span>Listing</span><i data-feather="file-text"></i></a></li>
                            <li><a href="login.html"><span>Log in</span><i data-feather="log-in"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- page header end -->
        <div class="page-body-wrapper">

            <!-- page sidebar start -->
            <div class="page-sidebar">
                <div class="logo-wrap">
                    <a href="index.html">
                        <img src="../assets/images/logo/4.png" class="img-fluid for-light" alt="">
                        <img src="../assets/images/logo/9.png" class="img-fluid for-dark" alt="">
                    </a>
                    <div class="back-btn d-lg-none d-inline-block">
                        <i data-feather="chevrons-left"></i>
                    </div>
                </div>
                <div class="main-sidebar">
                    <div class="user-profile">
                        <div class="media">
                            <div class="change-pic">
                                <img src="../assets/images/avatar/3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="media-body">
                                <a href="user-profile.html"><h6>Zack Lee</h6></a>
                                <span class="font-roboto">zackle@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div id="mainsidebar">
                        <ul class="sidebar-menu custom-scrollbar">
                            <li class="sidebar-item">
                                <a href="index.html" class="sidebar-link only-link">
                                    <i data-feather="airplay"></i> 
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="grid"></i> 
                                    <span>My properties</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="add-property.html">
                                            <i data-feather="chevrons-right"></i>
                                            add property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit-property.html">
                                            <i data-feather="chevrons-right"></i>
                                            edit property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listing.html">
                                            <i data-feather="chevrons-right"></i>
                                            property list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favourites.html">
                                            <i data-feather="chevrons-right"></i>
                                            Favourites
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="users"></i>
                                    <span>Manage users</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="user-profile.html">
                                            <i data-feather="chevrons-right"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-user.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add user
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-user-wizard.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add user wizard <span class="label label-shadow ms-1">new</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit-user.html">
                                            <i data-feather="chevrons-right"></i>
                                            Edit user
                                        </a>
                                    </li>
                                    <li>
                                        <a href="all-users.html">
                                            <i data-feather="chevrons-right"></i>
                                            All users
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="user-plus"></i>
                                    <span>Agents</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="agent-profile.html">
                                            <i data-feather="chevrons-right"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-agent.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add agent
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-agent-wizard.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add agent wizard <span class="label label-shadow ms-1">new</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit-agent.html">
                                            <i data-feather="chevrons-right"></i>
                                            Edit agent
                                        </a>
                                    </li>
                                    <li>
                                        <a href="all-agents.html">
                                            <i data-feather="chevrons-right"></i>
                                            All agents
                                        </a>
                                    </li>
                                    <li>
                                        <a href="agent-invoice.html">
                                            <i data-feather="chevrons-right"></i>
                                            Invoice
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="map.html" class="sidebar-link only-link">
                                    <i data-feather="map-pin"></i>
                                    <span>Map</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="layout"></i>
                                    <span>Types</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="family-house.html">
                                            <i data-feather="chevrons-right"></i>
                                            Family House
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cottage.html">
                                            <i data-feather="chevrons-right"></i>
                                            Cottage
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apartment.html">
                                            <i data-feather="chevrons-right"></i>
                                            Apartment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="condominium.html">
                                            <i data-feather="chevrons-right"></i>
                                            Condominium
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="reports.html" class="sidebar-link only-link">
                                    <i data-feather="bar-chart-2"></i>
                                    <span>Reports</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="payments.html" class="sidebar-link only-link">
                                    <i data-feather="credit-card"></i>
                                    <span>Payments</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="unlock"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="login.html">
                                            <i data-feather="chevrons-right"></i>
                                            Log in
                                        </a>
                                    </li>
                                    <li>
                                        <a href="signup.html">
                                            <i data-feather="chevrons-right"></i>
                                            sign up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <i data-feather="chevrons-right"></i>
                                            404
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="upgrade-box">
                                    <img src="../assets/images/svg/1.svg" class="img-fluid" alt="">
                                    <h6>Need Help</h6>
                                    <a href="https://pixelstrap.freshdesk.com/support/home" target="_blank" class="p-0 m-0">
                                        <span class="d-block">Raise ticket at "support@pixelstrap.com"</a>
                                    </a>
                                    <button type="button" onclick=" window.open('https://themeforest.net/user/pixelstrap/portfolio', '_blank');" class="btn btn-pill btn-gradient color-4 btn-sm mt-2 fw-bold">Buy Now</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- page sidebar end -->

            <div class="page-body">

                <!-- Container-fluid start -->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-header-left">
                                    <h3>Add user
                                        <small>Welcome to admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <!-- Breadcrumb start -->
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Manage users</li>
                                </ol>
                                <!-- Breadcrumb end -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid end -->

                <!-- Container-fluid start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card"> 
                                <div class="card-header pb-0">
                                    <h5>Add user details</h5>
                                </div>
                                 <div class="card-body admin-form">
                                    <form class="row gx-3">
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label>First name <span class="font-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="enter your name" required="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label>Last name <span class="font-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="enter your surname" required="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label>Gender <span class="font-danger">*</span></label>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Gender</span> <i class="fas fa-angle-down"></i></span>
                                                <div class="dropdown-menu text-start">
                                                    <a class="dropdown-item" href="javascript:void(0)">Male</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Female</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label>Phone number <span class="font-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="enter your mobile number" required="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label>Date of birth <span class="font-danger">*</span></label>
                                            <input class="form-control" placeholder="18 april" id="datepicker" />
                                        </div>
                                        <div class="form-group col-md-4 col-sm-6">
                                            <label>Email Address <span class="font-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="enter your email" required="">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Password <span class="font-danger">*</span></label>
                                            <input type="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Confirm Password <span class="font-danger">*</span></label>
                                            <input type="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Enter your Address">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Zip code</label>
                                            <input type="number" class="form-control" placeholder="Enter pin code">
                                        </div>
                                    </form>
                                    <div class="dropzone-admin mb-0">
                                        <label>Media</label>
                                        <form class="dropzone" id="multiFileUpload" action="https://themes.pixelstrap.com/upload.php">
                                            <div class="dz-message needsclick"><i class="fas fa-cloud-upload-alt"></i>
                                            <h6>Drop files here or click to upload.</h6>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-btn">
                                        <button type="button" class="btn btn-pill btn-gradient color-4">Submit</button>
                                        <button type="button" class="btn btn-pill btn-dashed color-4">Cancel</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid end -->

            </div>

            <!-- footer start -->
            <footer class="footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 footer-copyright">
                      <p class="mb-0">Copyright 2022 © Sheltos All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                      <p class="float-end mb-0">Developed with  <i class="fa fa-heart font-danger"></i></p>
                    </div>
                  </div>
                </div>
              </footer>
            <!-- footer end -->
        </div>
    </div>

    <!-- tap to top start -->
    <div class="tap-top">
        <div>
            <i class="fas fa-arrow-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

    <!-- customizer start -->
    <div class="customizer-wrap">
        <div class="customizer-links">
            <i data-feather="settings"></i>
        </div>
        <div class="customizer-contain custom-scrollbar">
            <div class="setting-back">
                <i data-feather="x"></i>
            </div>
            <div class="layouts-settings">
                <div class="customizer-title">
                    <h6 class="color-4">Layout type</h6>
                </div>
                <div class="option-setting">
                    <span>Light</span>
                    <label class="switch">
                        <input type="checkbox" name="chk1" value="option" class="setting-check"><span class="switch-state"></span>
                    </label>
                    <span>Dark</span>
                </div>
            </div>
            <div class="layouts-settings">
                <div class="customizer-title">
                    <h6 class="color-4">Layout Direction</h6>
                </div>
                <div class="option-setting">
                    <span>LTR</span>
                    <label class="switch">
                        <input type="checkbox" name="chk2" value="option" class="setting-check1"><span class="switch-state"></span>
                    </label>
                    <span>RTL</span>
                </div>
            </div>
            <div class="layouts-settings">
                <div class="customizer-title">
                    <h6 class="color-4">Unlimited Color</h6>
                </div>
                <div class="option-setting unlimited-color-layout">
                    <div class="form-group">
                        <label for="ColorPicker6">color 6</label>
                        <input id="ColorPicker6" type="color" value="#f35d43" name="Default">
                    </div>
                    <div class="form-group">
                        <label for="ColorPicker7">color 7</label>
                        <input id="ColorPicker7" type="color" value="#f34451" name="Default"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customizer end -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather-icon/feather.min.js"></script>
    <script src="../assets/js/feather-icon/feather-icon.js"></script>

    <!-- Dropzone js -->
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>

    <!-- datepicker js-->
    <script src="../assets/js/date-picker.js"></script>

    <!-- Color-picker js-->
    <script src="../assets/js/color/two-color-picker.js"></script>
    
    <!-- sidebar js -->
    <script src="../assets/js/sidebar.js"></script>

    <!--admin js -->
    <script src="../assets/js/admin-script.js"></script>

    <!-- Customizer js-->
    <script src="../assets/js/customizer.js"></script>

</body>
</html>