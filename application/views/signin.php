<?php //echo validation_errors(); ?>
<?php echo form_open('auth/login'); ?>

<!-- breadcrumb start -->
<section class="breadcrumb-section p-0">
    <img src="assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
    <div class="container">
        <div class="breadcrumb-content">
            <div>
                <h2>Log in</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Log in</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- section start -->
<section class="login-wrap">
    <div class="container">
        <div class="row log-in">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12">
                <div class="theme-card">
                    <div class="title-3 text-start">
                        <h2>Log in</h2>
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                                <input type="password" id="pwd-input" class="form-control" placeholder="Password"
                                    maxlength="8" required>
                                <div class="input-group-apend">
                                    <div class="input-group-text">
                                        <i id="pwd-icon" class="far fa-eye-slash"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="important-note">
                                password should be a minimum of 8 characters and should contains letters and numbers
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="d-block mb-0" for="chk-ani">
                                <input class="checkbox_animated color-2" id="chk-ani" type="checkbox"> <span>Remember
                                    me</span>
                            </label>
                            <a href="forgot-password.html" class="font-rubik text-color-2">Forgot password ?</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-gradient btn-pill color-2 me-sm-3 me-2">Log in</button>
                            <a href="signup.html" class="btn btn-dashed btn-pill color-2">Create Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->