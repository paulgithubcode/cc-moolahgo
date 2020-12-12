<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Profile - SnapTradar | Easy Stock Screening Radar for Traders to get Daily Trade Opportunities in just 10 minutes a day
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="SnapTradar | Easy Stock Screening Radar for Traders and Tnvestors to get Daily Trade Opportunities in just 10 minutes a day. Used by thousands of Traders all over the world daily.">
    <meta name="keywords" content="Stock Radar, Stock Screener, Charts, Quotes, Maps, Financial Visualizations, Research, Trading Systems, HKSE, SGX, NYSE, Nasdaq, stock screens, stock filter, stock scans, Stock pick">
    <meta name="author" content="">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/png" href="assets/img/favico.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="assets/css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="assets/css/styles.css">
    <!-- Modernizr-->
    <script src="assets/js/modernizr.min.js"></script>
</head>
<!-- BODY -->
<body>

<!-- NAVBAR-->
<?php include 'inc/menu_sidebar.php';?>

<!-- NAVBAR-->
<?php include 'inc/menu.php';?>

<!-- BEGIN MAIN CONTENT-->
<div class="offcanvas-wrapper">

    <!-- BEGIN BREADCRUMBS-->
    <div class="page-title m-b-0">
        <div class="container">
            <div class="column">
                <h1>Profile</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="dashboard.php">Home</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS-->

    <!-- PAGE CONTENT BEGINS -->
    <div id="container">

        <div class="container p-t-60">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="user-info-wrapper">
                        <div class="user-cover" style="background-image:url('assets/img/user-cover-img.jpg')">
                            <div class="info-label" data-toggle="tooltip"
                                 title="Verified User">
                                <i class="icon-medal"></i> Verified User
                            </div>
                        </div>
                        <div class="user-info">
                            <div class="user-avatar"><a class="edit-avatar" href="javascript:void(0)"></a><img
                                    src="assets/img/avatar/default-avatar.jpg" alt="User"></div>
                            <div class="user-data">
                                <h4>Administrator</h4>
                                <span>snaptradar</span>
                            </div>
                        </div>
                    </aside>
                    <nav class="list-group">
                        <a class="list-group-item with-badge" href="javascript:void(0)">
                            <i class="icon-bag"></i>Orders
                            <span class="badge badge-primary badge-pill">6</span>
                        </a>
                        <a class="list-group-item active" href="javascript:void(0)">
                            <i class="icon-head"></i>Profile
                        </a>
                        <a class="list-group-item" href="javascript:void(0)">
                            <i class="icon-map"></i>Addresses
                        </a>
                        <a class="list-group-item with-badge" href="javascript:void(0)">
                            <i class="icon-heart"></i>Wishlist
                            <span class="badge badge-primary badge-pill">3</span>
                        </a>
                        <a class="list-group-item with-badge" href="javascript:void(0)">
                            <i class="icon-tag"></i>My Tickets
                            <span class="badge badge-primary badge-pill">4</span>
                        </a>
                    </nav>
                </div>
                <div class="col-lg-8">
                    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                    <form class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-fn">First Name</label>
                                <input class="form-control form-control-rounded" type="text" id="account-fn"
                                       value="Administrator" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-ln">Last Name</label>
                                <input class="form-control form-control-rounded" type="text" id="account-ln"
                                       value="snaptradar" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-email">E-mail Address</label>
                                <input class="form-control form-control-rounded" type="email" value="admin@snaptradar.com" id="account-email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-email">DOB</label>
                                <input class="form-control form-control-rounded date_picker" value="04/12/1992" type="text"
                                       id="account-dob">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-email">Gender</label>
                                <select class="form-control form-control-rounded">
                                    <option value="">Select</option>
                                    <option value="" selected>Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-phone">Phone Number</label>
                                <input class="form-control form-control-rounded" value="+919159547048" type="text" id="account-phone"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-pass">New Password</label>
                                <input class="form-control form-control-rounded" type="password" id="account-pass">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-confirm-pass">Confirm Password</label>
                                <input class="form-control form-control-rounded" type="password"
                                       id="account-confirm-pass">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                                    <label class="custom-control-label" for="subscribe_me">Subscribe me to
                                        Newsletter</label>
                                </div>
                                <button class="btn btn-primary btn-rounded margin-right-none" type="button" data-toast
                                        data-toast-position="topRight" data-toast-type="success"
                                        data-toast-icon="icon-circle-check" data-toast-title="Success!"
                                        data-toast-message="Your profile updated successfuly.">Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BEGINS -->

    <!-- BEGIN SITE FOOTER-->
    <?php include 'inc/footer.php';?>
    <!-- END SITE FOOTER-->
</div>
<!-- END MAIN CONTENT-->

<!-- BEGIN BACK TO TOP BUTTON-->
<a class="scroll-to-top-btn" href="javascript:void(0)">
    <i class="icon-arrow-up"></i>
</a>
<!-- END BACK TO TOP BUTTON-->

<!-- Backdrop-->
<div class="site-backdrop"></div>

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!-- END PRELOADER -->

<!-- BEGIN CORE JS -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/scripts.min.js"></script>
</body>
</html>