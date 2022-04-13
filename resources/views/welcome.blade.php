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
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
      data-assets-path="../../assets/" data-template="vertical-menu-template">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 19:27:16 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>FAQ - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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


    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-faq.css"/>
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

<!-- Layout wrapper -->


<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">


        <!-- Layout container -->
        <div class="layout-page p-0" style="padding-top: 0 !important;">


            <!-- Navbar -->


            <!-- / Navbar -->


            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme w-100"
                style="margin-right: 4rem" id="layout-navbar">


                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>


                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                <i class="bx bx-search bx-sm"></i>
                                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->


                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- Language -->
                        <div class="btn-group">
                            <div class="dropdown-toggle cursor-pointer" type="" id="defaultDropdown"
                                 data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                Companies
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                <li><a class="dropdown-item" href="{{route('companies.create')}}">Create Account</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('companies_login')}}">Login</a></li>
                            </ul>
                        </div>
                        <!--/ Language -->

                        <li class="nav-item me-2 me-xl-0">
                            <a class="dropdown-item" href="{{route('admins_login')}}">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item me-2 me-xl-0">
                            <a class="dropdown-item" href="{{route('Student_login')}}">
                                Student
                            </a>
                        </li>



                        <!-- Style Switcher -->
                        <li class="nav-item me-2 me-xl-0">
                            <a class="dropdown-item" href="{{route('Supervisor_login')}}">
                                Supervisor
                            </a>
                        </li>
                        <!--/ Style Switcher -->


                    </ul>
                </div>


                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper  d-none">
                    <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                           aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>


            </nav>


            <!-- Content wrapper -->
            <div class="content-wrapper ">

                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y p-0 px-0">


                    <div class="faq-header d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center"> Hello, how can we help? </h3>
                        <div class="input-wrapper my-3 input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="bx bx-search-alt bx-xs text-muted"></i></span>
                            <input type="text" class="form-control form-control-lg" placeholder="Search a question..."
                                   aria-label="Search" aria-describedby="basic-addon1"/>
                        </div>
                        <p class="text-center mb-0 px-3">or choose a category to quickly find the help you need</p>
                    </div>

                    <div class="row mt-4">
                        <!-- Navigation -->
                        <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
                            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                                <ul class="nav nav-align-left nav-pills flex-column">
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
                                            <i class="bx bx-credit-card faq-nav-icon me-1"></i>
                                            <span class="align-middle">Payment</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                                            <i class='bx bx-shopping-bag faq-nav-icon me-1'></i>
                                            <span class="align-middle">Delivery</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
                                            <i class='bx bx-rotate-left faq-nav-icon me-1'></i>
                                            <span class="align-middle">Cancellation & Return</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#orders">
                                            <i class='bx bx-cube faq-nav-icon me-1'></i>
                                            <span class="align-middle">My Orders</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product">
                                            <i class='bx bx-cog faq-nav-icon me-1'></i>
                                            <span class="align-middle">Product & Services</span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="d-none d-md-block">
                                    <div class="mt-5">
                                        <img src="../../assets/img/illustrations/sitting-girl-with-laptop-light.png"
                                             class="img-fluid w-px-200" alt="FAQ Image"
                                             data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                             data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.html">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Navigation -->

                        <!-- FAQ's -->
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="tab-content py-0">
                                <div class="tab-pane fade show active" id="payment" role="tabpanel">
                                    <div class="d-flex mb-3 gap-3">
                                        <div>
            <span class="badge bg-label-primary rounded-2">
              <i class="bx bx-credit-card bx-md"></i>
            </span>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">
                                                <span class="align-middle">Payment</span>
                                            </h4>
                                            <span>Get help with payment</span>
                                        </div>
                                    </div>
                                    <div id="accordionPayment" class="accordion">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        aria-expanded="true" data-bs-target="#accordionPayment-1"
                                                        aria-controls="accordionPayment-1">
                                                    Q1: When is payment taken for my order?
                                                </button>
                                            </h2>

                                            <div id="accordionPayment-1" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    Payment is taken during the checkout process when you pay for
                                                    your order. The order number that appears on the confirmation
                                                    screen indicates payment has been successfully processed.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionPayment-2"
                                                        aria-controls="accordionPayment-2">
                                                    Q2: How do I pay for my order?
                                                </button>
                                            </h2>
                                            <div id="accordionPayment-2" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    We accept Visa®, MasterCard®, American Express®, and PayPal®.
                                                    Our servers encrypt all information submitted to them, so you
                                                    can be confident that your credit card information will be kept
                                                    safe and secure.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionPayment-3"
                                                        aria-controls="accordionPayment-3">
                                                    Q3: What should I do if I'm having trouble placing an order?
                                                </button>
                                            </h2>
                                            <div id="accordionPayment-3" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    For any technical difficulties you are experiencing with our
                                                    website, please contact us at our
                                                    <a href="javascript:void(0);">support portal</a>, or you can call us
                                                    toll-free at
                                                    <strong>1-000-000-000</strong>, or email us at
                                                    <a href="javascript:void(0);">order@companymail.com</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionPayment-4"
                                                        aria-controls="accordionPayment-4">
                                                    Q4: Which license do I need for an end product that is only
                                                    accessible to paying users?
                                                </button>
                                            </h2>
                                            <div id="accordionPayment-4" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    If you have paying users or you are developing any SaaS products
                                                    then you need an Extended License.
                                                    For each products, you need a license. You can get free lifetime
                                                    updates as well.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionPayment-5"
                                                        aria-controls="accordionPayment-5">
                                                    Q5: Does my subscription automatically renew?
                                                </button>
                                            </h2>
                                            <div id="accordionPayment-5" class="accordion-collapse collapse">
                                                <div class="accordion-body">No, This is not subscription based
                                                    item.Pastry pudding cookie toffee bonbon jujubes jujubes powder
                                                    topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice.
                                                    Wafer lollipop sesame snaps.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="delivery" role="tabpanel">
                                    <div class="d-flex mb-3 gap-3">
                                        <div>
            <span class="badge bg-label-primary rounded-2">
              <i class="bx bx-cart bx-md"></i>
            </span>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">
                                                <span class="align-middle">Delivery</span>
                                            </h4>
                                            <span>Get help with delivery</span>
                                        </div>
                                    </div>
                                    <div id="accordionDelivery" class="accordion">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        aria-expanded="true" data-bs-target="#accordionDelivery-1"
                                                        aria-controls="accordionDelivery-1">
                                                    Q1: How would you ship my order?
                                                </button>
                                            </h2>

                                            <div id="accordionDelivery-1" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    For large products, we deliver your product via a third party
                                                    logistics company offering you the “room of choice” scheduled
                                                    delivery service. For small products, we offer free parcel
                                                    delivery.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionDelivery-2"
                                                        aria-controls="accordionDelivery-2">
                                                    Q2: What is the delivery cost of my order?
                                                </button>
                                            </h2>
                                            <div id="accordionDelivery-2" class="accordion-collapse collapse">
                                                <div class="accordion-body">The cost of scheduled delivery is $69 or $99
                                                    per order, depending on the destination postal code. The parcel
                                                    delivery is free.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionDelivery-4"
                                                        aria-controls="accordionDelivery-4">
                                                    Q3: What to do if my product arrives damaged?
                                                </button>
                                            </h2>
                                            <div id="accordionDelivery-4" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    We will promptly replace any product that is damaged in transit.
                                                    Just contact our
                                                    <a href="javascript:void(0);">support team</a>, to notify us of the
                                                    situation
                                                    within 48 hours of product arrival.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cancellation" role="tabpanel">
                                    <div class="d-flex mb-3 gap-3">
                                        <div>
            <span class="badge bg-label-primary rounded-2">
              <i class="bx bx-revision bx-md"></i>
            </span>
                                        </div>
                                        <div>
                                            <h4 class="mb-0"><span class="align-middle">Cancellation & Return</span>
                                            </h4>
                                            <span>Get help with cancellation & return</span>
                                        </div>
                                    </div>
                                    <div id="accordionCancellation" class="accordion">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        aria-expanded="true" data-bs-target="#accordionCancellation-1"
                                                        aria-controls="accordionCancellation-1">
                                                    Q1: Can I cancel my order?
                                                </button>
                                            </h2>

                                            <div id="accordionCancellation-1" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <p>
                                                        Scheduled delivery orders can be cancelled 72 hours prior to
                                                        your selected delivery date for full refund.
                                                    </p>
                                                    <p class="mb-0">
                                                        Parcel delivery orders cannot be cancelled, however a free
                                                        return label can be provided upon request.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordionCancellation-2"
                                                        aria-controls="accordionCancellation-2">
                                                    Q2: Can I return my product?
                                                </button>
                                            </h2>
                                            <div id="accordionCancellation-2" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    You can return your product within 15 days of delivery, by
                                                    contacting our
                                                    <a href="javascript:void(0);">support team</a>, All merchandise
                                                    returned must be
                                                    in the original packaging with all original items.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        aria-controls="accordionCancellation-3"
                                                        data-bs-target="#accordionCancellation-3">
                                                    Q3: Where can I view status of return?
                                                </button>
                                            </h2>
                                            <div id="accordionCancellation-3" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <p>Locate the item from Your <a
                                                            href="javascript:void(0);">Orders</a></p>
                                                    <p class="mb-0">Select <strong>Return/Refund</strong> status</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="d-flex mb-3 gap-3">
                                        <div>
            <span class="badge bg-label-primary rounded-2">
              <i class="bx bx-box bx-md"></i>
            </span>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">
                                                <span class="align-middle">My Orders</span>
                                            </h4>
                                            <span>Order details</span>
                                        </div>
                                    </div>
                                    <div id="accordionOrders" class="accordion">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        aria-expanded="true" data-bs-target="#accordionOrders-1"
                                                        aria-controls="accordionOrders-1">
                                                    Q1: Has my order been successful?
                                                </button>
                                            </h2>

                                            <div id="accordionOrders-1" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <p>
                                                        All successful order transactions will receive an order
                                                        confirmation email once the order has been processed. If you
                                                        have not received your order confirmation email within 24
                                                        hours, check your junk email or spam folder.
                                                    </p>
                                                    <p class="mb-0">
                                                        Alternatively, log in to your account to check your order
                                                        summary. If you do not have a account, you can contact our
                                                        Customer Care Team on <strong>1-000-000-000</strong>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionOrders-2"
                                                        aria-controls="accordionOrders-2">
                                                    Q2: My Promotion Code is not working, what can I do?
                                                </button>
                                            </h2>
                                            <div id="accordionOrders-2" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    If you are having issues with a promotion code, please contact
                                                    us at <strong>1 000 000 000</strong> for assistance.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionOrders-3"
                                                        aria-controls="accordionOrders-3">
                                                    Q3: How do I track my Orders?
                                                </button>
                                            </h2>
                                            <div id="accordionOrders-3" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <p>
                                                        If you have an account just sign into your account from
                                                        <a href="javascript:void(0);">here</a> and select <strong>“My
                                                            Orders”</strong>.
                                                    </p>
                                                    <p class="mb-0">
                                                        If you have a a guest account track your order from
                                                        <a href="javascript:void(0);">here</a> using the order number
                                                        and the email
                                                        address.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product" role="tabpanel">
                                    <div class="d-flex mb-3 gap-3">
                                        <div>
            <span class="badge bg-label-primary rounded-2">
              <i class="bx bx-camera bx-md"></i>
            </span>
                                        </div>
                                        <div>
                                            <h4 class="mb-0">
                                                <span class="align-middle">Product & Services</span>
                                            </h4>
                                            <span>Get help with product & services</span>
                                        </div>
                                    </div>
                                    <div id="accordionProduct" class="accordion">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        aria-expanded="true" data-bs-target="#accordionProduct-1"
                                                        aria-controls="accordionProduct-1">
                                                    Q1: Will I be notified once my order has shipped?
                                                </button>
                                            </h2>

                                            <div id="accordionProduct-1" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    Yes, We will send you an email once your order has been shipped.
                                                    This email will contain tracking and order information.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionProduct-2"
                                                        aria-controls="accordionProduct-2">
                                                    Q2: Where can I find warranty information?
                                                </button>
                                            </h2>
                                            <div id="accordionProduct-2" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    We are committed to quality products. For information on
                                                    warranty period and warranty services, visit our Warranty
                                                    section <a href="javascript:void(0);">here</a>.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionProduct-3"
                                                        aria-controls="accordionProduct-3">
                                                    Q3: How can I purchase additional warranty coverage?
                                                </button>
                                            </h2>
                                            <div id="accordionProduct-3" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    For the peace of your mind, we offer extended warranty plans
                                                    that add additional year(s) of protection to the standard
                                                    manufacturer’s warranty provided by us. To purchase or find out
                                                    more about the extended warranty program, visit Extended
                                                    Warranty section <a href="javascript:void(0);">here</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ's -->
                    </div>

                    <!-- Contact -->
                    <div class="row mt-5">
                        <div class="col-12 text-center mb-4">
                            <div class="badge bg-label-primary">Question?</div>
                            <h4 class="my-2">You still have a question?</h4>
                            <p>If you can't find question in our FAQ, you can contact us. We'll answer you shortly!</p>
                        </div>
                    </div>
                    <div class="row text-center justify-content-center gap-sm-0 gap-3">
                        <div class="col-sm-6">
                            <div class=" py-3 rounded bg-faq-section text-center">
      <span class="badge bg-label-primary rounded-2 my-3">
        <i class="bx bx-phone bx-sm"></i>
      </span>
                                <h4 class="mb-2"><a class="h4" href="tel:+(810)25482568">+ (810) 2548 2568</a></h4>
                                <p>We are always happy to help</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class=" py-3 rounded bg-faq-section text-center">
      <span class="badge bg-label-primary rounded-2 my-3">
        <i class="bx bx-envelope bx-sm"></i>
      </span>
                                <h4 class="mb-2"><a class="h4" href="mailto:help@help.com">help@help.com</a></h4>
                                <p>Best way to get a quick answer</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact -->


                </div>
                <!-- / Content -->


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            , made with ❤️ by <a href="https://themeselection.com/" target="_blank"
                                                 class="footer-link fw-bolder">ThemeSelection</a>
                        </div>
                        <div>

                            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                Themes</a>

                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                               target="_blank" class="footer-link me-4">Documentation</a>


                            <a href="https://themeselection.com/support/" target="_blank"
                               class="footer-link d-none d-sm-inline-block">Support</a>

                        </div>
                    </div>
                </footer>
                <!-- / Footer -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>


    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->


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


<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->


</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 19:27:16 GMT -->
</html>
