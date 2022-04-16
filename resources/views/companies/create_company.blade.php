<!DOCTYPE html>


<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default"
      data-assets-path="../../assets/" data-template="vertical-menu-template">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-register-multisteps.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 19:27:23 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Multi Steps Sign-up - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description"
          content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!"/>
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css"/>
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css"/>
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="../../assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css"/>
    <!-- Vendor -->
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css"/>
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css"/>
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css"/>
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css"/>

    <!-- Page CSS -->

    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

<!-- Content -->

<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">

        <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
            <div class="w-px-400">
                <img src="../../assets/img/illustrations/create-account-light.png" class="img-fluid" alt="multi-steps"
                     width="600" data-app-dark-img="illustrations/create-account-dark.png"
                     data-app-light-img="illustrations/create-account-light.png">
            </div>
        </div>
        <!-- /Left Text -->

        <!--  Multi Steps Registration -->
        <div class="d-flex col-lg-8 align-items-center authentication-bg p-sm-5 p-3">
            <div class="w-px-700 mx-auto">
                <div id="multiStepsValidation" class="bs-stepper shadow-none">
                    <div class="bs-stepper-header border-bottom-0">
                        <div class="step" data-target="#accountDetailsValidation">
                            <button type="" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="bx bx-home-alt"></i></span>
                                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Account</span>
                  <span class="bs-stepper-subtitle">Account Details</span>
                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#personalInfoValidation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Contact</span>
                  <span class="bs-stepper-subtitle">Enter Contact Information</span>
                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i class="bx bx-chevron-right"></i>
                        </div>
                        <div class="step" data-target="#billingLinksValidation">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="bx bx-detail"></i></span>
                                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Description</span>
                  <span class="bs-stepper-subtitle">desc Details</span>
                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form id="multiStepsForm" enctype="multipart/form-data"  method="post" action="{{route('companies.store')}}">
                        @csrf
                        <!-- Account Details -->
                            <div id="accountDetailsValidation" class="content">
                                <div class="content-header mb-3">
                                    <h3 class="mb-1">Account Information</h3>
                                    <span>Enter Your Account Details</span>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="user_id">Company ID</label>
                                        <input type="text" name="user_id" id="user_id" class="form-control"
                                               placeholder="IT Company" required onchange="handleId()"/>
                                        <span id="user_id_err" style="color: red;font-size: small;margin: 3px"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsEmail">Email</label>
                                        <input type="email" name="email" id="multiStepsEmail" class="form-control"
                                               placeholder="john.doe@email.com" aria-label="john.doe"/>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="pass">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="pass" name="password"
                                                   class="form-control"
                                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                   aria-describedby="multiStepsPass2" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i
                                                    class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="passConf">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="passConf"
                                                   name="passcon" class="form-control"
                                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                   aria-describedby="multiStepsConfirmPass2"
                                                   onkeyup="handlePass()"
                                            />
                                            <span class="input-group-text cursor-pointer" id="multiStepsConfirmerr"><i
                                                    class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="multiStepsURL">Website(optional)</label>
                                        <input type="text" name="website" id="multiStepsURL" class="form-control"
                                               placeholder="johndoe/profile" aria-label="johndoe"/>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled><i
                                                class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next" type="button" id="next_btn"><span
                                                class="align-middle d-sm-inline-block d-none me-sm-1 me-0" >Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personalInfoValidation" class="content">
                                <div class="content-header mb-3">
                                    <h3 class="mb-1">Contact Information</h3>
                                    <span>Enter Your Contact Information</span>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="John"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="major">Major</label>
                                        <input type="text" id="major" name="major" class="form-control"
                                               placeholder="Doe"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsMobile">Mobile</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">JO(+962)</span>
                                            <input type="text" id="multiStepsMobile" name="phone"
                                                   class="form-control multi-steps-mobile" placeholder="77/79/78"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="multiStepsPincode">Zipcode</label>
                                        <input type="text" id="multiStepsPincode" name="zip"
                                               class="form-control multi-steps-pincode" placeholder="Postal Code"
                                               maxlength="6"/>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="multiStepsAddress">Address</label>
                                        <input type="text" id="multiStepsAddress" name="location"
                                               class="form-control" placeholder="Address"/>
                                    </div>


                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev" type="button"><i
                                                class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next" type="button"> <span
                                                class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Billing Links -->
                            <div id="billingLinksValidation" class="content">
                                <div class="content-header mb-3">
                                    <h3 class="mb-1">Description</h3>
                                    <span>Enter Your Description</span>
                                </div>
                                <div class="row g-3">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Company Cover</label>
                                        <input class="form-control" type="file" id="formFile" name="photo">
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                  name="description"></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev"><i
                                                class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none" type="button">Previous</span>
                                        </button>
                                        <button type="submit"  class="btn btn-success btn-next">Submit
                                        </button>
                                    </div>
                                </div>
                                <!--/ Credit Card Details -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Multi Steps Registration -->
    </div>
</div>

<script>
    // Check selected custom option
    window.Helpers.initCustomOptionCheck();
</script>

<!-- / Content -->




<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<script src="../../assets/vendor/libs/select2/select2.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../../assets/js/pages-auth-multisteps.js"></script>
<script>
    const form =document.querySelector('form');

</script>
<script>
    const err =  document.querySelector('#user_id_err');
    const btn =  document.querySelector('#next_btn');
    const pass = document.querySelector('#pass');
    const passConf = document.querySelector('#passConf');
    const errPass = document.querySelector('#multiStepsConfirmerr');
    function handlePass(){
        if(pass.value!==passConf.value){
            btn.disabled = true;
            errPass.style.color= 'red';
            errPass.innerHTML = 'passwords should be the same';
        }else{
            btn.disabled = false;
            errPass.style.color= 'green';
            errPass.innerHTML = ''
        }
    }
    function handleId() {
        id = document.querySelector('#user_id').value
        fetch(`http://127.0.0.1:8000/api/isCompany/ahgdyuppppp/${id}`)
            .then(response => response.json())
            .then(response => {
                let isCompany = Number(response.data);

                if(isCompany===1){
                    btn.disabled = false;
                    err.innerHTML = 'This Company Is Registered';
                    err.style.color= 'green';
                }else{
                    btn.disabled = true;
                    err.innerHTML = 'This Company Is not Registered';
                    err.style.color= 'red';

                }
            })
            .catch(err => console.error(err));



    }

</script>
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-register-multisteps.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 19:27:25 GMT -->
</html>
