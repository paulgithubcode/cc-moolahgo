<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Watchlist - SnapTradar | Easy Stock Screening Radar for Traders to get Daily Trade Opportunities in just 10 minutes a day
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
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>Watchlist</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="dashboard.php">Home</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Watchlist</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS-->

    <!-- PAGE CONTENT BEGINS -->
    <div class="container" id="container">
        <!-- BEGIN ROW -->
			<div class="col-lg-12">
				<div class="accordion" id="accordion1" role="tablist">
					<div class="card">
					<div class="card-header" role="tab">
						<h6>
							<a href="#collapseOne" data-toggle="collapse" data-parent="#accordion1">WATCHLIST &amp; MARKET DATA</a>
						</h6>
					</div>
					<div class="collapse show" id="collapseOne" role="tabpanel">
					<div class="card-body">
						<fieldset>
							<div class="col-md-12 mb-30">
								<div class="row">
									<div class="col-lg-6">
										<form class="validate_1" action="watchlist_market_data.php" method="post">
										<fieldset>
											<p for="regular_selst" class="text-left">MARKET DATA</p>
											<select class="form-control" id="regular_selst" name="regular_selst">
												<option value="">Select</option>
												<option value="Hong Kong">HONG KONG STOCK EXCHANGE</option>
											</select>
											<div class="text-right"><button type="submit" class="btn btn-sm btn-primary m-r-5">VIEW</button></div>
										</fieldset>
										</form>
									</div>
									<div class="col-lg-6">
										<form class="validate_1" action="watchlist_data.php" method="post">
										<fieldset>
											<p for="regular_selst" class="text-left">WATCHLIST</p>
											<select class="form-control" id="regular_selst" name="regular_selst">
												<option value="">Select</option>
												<option value="SGX_001">SGX_001_WATCHLIST</option>
											</select>
											<div class="text-right"><button type="submit" class="btn btn-sm btn-primary m-r-5">VIEW</button></div>
										</fieldset>
										</form>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<img src="assets/img/bull-grey.png">
									</div>
									<div class="col-lg-4 text-center p-t-20">
										<p>PLEASE CHOOSE</p>
										<h2>Market or Watchlist</h2>
										<p>To start, you can first choose from the stocks from exchanges. Click on the add button to create into your watchlist. Viewing the results on our charts with solution has never been easier.</p>
									</div>
									<div class="col-lg-4">
										<img src="assets/img/bear-grey.png">
									</div>
								</div>
							</div>
						</fieldset>
					</div>
					</div>
					</div>
				</div>
			</div>
		<!-- END ROW -->
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