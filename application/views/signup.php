<!DOCTYPE html>
<html lang="en">
<body>
    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Sign up wizard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign up wizard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- sign up section start -->
    <section class="property-wizard horizontal-wizard">
        <div class="container">
            <div class="row wizard-box">
                <div class="col-lg-8 col-sm-10">
                    <div class="wizard-step-container theme-card">
                        <ul class="wizard-steps">
                            <li class="step-container step-1 active">
                                <div class="media">
                                    <div class="step-icon">
                                        <i data-feather="check"></i>
                                        <span>1</span>
                                    </div>
                                    <div class="media-body">
                                        <h5>Get started</h5>
                                        <h6>Account information</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="step-container step-2">
                                <div class="media">
                                    <div class="step-icon">
                                        <i data-feather="check"></i>
                                        <span>2</span>
                                    </div>
                                    <div class="media-body">
                                        <h5>Location</h5>
                                        <h6>Set your address</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="step-container step-3">
                                <div class="media">
                                    <div class="step-icon">
                                        <i data-feather="check"></i>
                                        <span>3</span>
                                    </div>
                                    <div class="media-body">
                                        <h5>Complete</h5>
                                        <h6>Successfully submitted</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="wizard-form-details log-in">
                            <div class="wizard-step-1 d-block">
                                <div class="title-3 text-start">
                                    <h2>Get started</h2>
                                </div>
                                <form class="row needs-validation" id="needs-validation" novalidate="" >
                                    <div class="form-group col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="user"></i>
                                            </div>
                                            <input type="text" class="form-control" id="first-name" name="firstname" placeholder="Enter your Name" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="phone"></i>
                                            </div>
                                            <input
                                                class="form-control" 
                                                name="mobnumber" 
                                                id="tbNumbers" 
                                                oninput="maxLengthCheck(this)"
                                                type = "tel"
                                                onkeypress="javascript:return isNumber(event)"
                                                maxlength = "9"
                                                placeholder="Enter your phone number"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="mail"></i>
                                            </div>
                                            <input type="email" class="form-control" id="email" placeholder="e.g,demo@gmail.com" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="lock"></i>
                                            </div>
                                            <input type="password" id="pwd-input" class="form-control" placeholder="Password" maxlength = "8" required="">
                                            <div class="input-group-text">
                                                <i id="pwd-icon" class="far fa-eye-slash"></i>
                                            </div>
                                        </div>
                                        <div class="important-note mb-4">
                                            password should be a minimum of 8 characters and should contains letters and numbers
                                        </div>
                                        <div class="text-end">
                                            <p>Alerady have an account ? 
                                                <a href="login.html" class="btn btn-dashed btn-pill color-2">Log in</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="next-btn text-end col-sm-12">
                                        <button type="submit" class="btn btn-gradient color-2 next1 btn-pill">Next <i class="fas fa-arrow-right ms-2"></i></button>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="wizard-step-2 d-none">
                                <div class="title-3 text-start">
                                    <h2>Add your Location</h2>
                                </div>
                                <form class="row" id="needs-validation1" novalidate="" >
                                    <div class="form-group col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="map-pin"></i>
                                            </div>
                                            <input type="text" class="form-control" id="address" placeholder="Enter your Address" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="map-pin"></i>
                                            </div>
                                            <input type="text" class="form-control" id="city_name" placeholder="Enter your city" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="map-pin"></i>
                                            </div>
                                            <input type="text" class="form-control" id="state_name" placeholder="Enter your state" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="map"></i>
                                            </div>
                                            <input type="text" class="form-control" id="country_name" placeholder="Enter your country" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i data-feather="map-pin"></i>
                                            </div>
                                            <input type="number" class="form-control" id="pin_code" placeholder="Enter your pin code" required="">
                                        </div>
                                    </div>
                                    <div class="next-btn d-flex col-sm-12">
                                        <button type="button" class="btn btn-dashed color-2 prev1 btn-pill"><i class="fas fa-arrow-left me-2"></i> Previous</button>
                                        <button type="submit" class="btn btn-gradient color-2 next2 btn-pill">Next <i class="fas fa-arrow-right ms-2"></i></button>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="wizard-step-3 d-none">
                                <div class="title-3 text-start">
                                    <h2>complete details</h2>
                                </div>
                                <div class="input-data">
                                    <div class="account-content">
                                        <h3>Account information</h3>
                                        <ul>
                                            <li>Name : <span class="first_name">test</span></li>
                                            <li>phone number : <span class="phone_number">64847654</span></li>
                                            <li>Email : <span class="email_add">test@gmail.com</span></li>
                                        </ul>
                                    </div>
                                    <div class="account-content">
                                        <h3>Location Details</h3>
                                        <ul>
                                            <li>Address : <span class="address-type">test</span></li>
                                            <li>city : <span class="city-name">test</span></li>
                                            <li>state : <span class="state-name">test</span></li>
                                            <li>country : <span class="country-name">test</span></li>
                                            <li>pincode : <span class="pin-code">test</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="next-btn d-flex">
                                    <button type="button" class="btn btn-dashed color-2 prev2 btn-pill"><i class="fas fa-arrow-left me-2"></i> Previous</button>
                                    <button type="button" class="btn btn-gradient color-2 next3 btn-pill">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up section end -->

</body>


</html>