<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Screener - SnapTradar | Easy Stock Screening Radar for Traders to get Daily Trade Opportunities in just 10 minutes a day
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
    <link id="" rel="stylesheet" media="screen" href="assets/css/slider-range.css">
    <!-- Modernizr-->
    <script src="assets/js/modernizr.min.js"></script>
	<style>#pvrLineChart_1,#pvrLineChart_2 {transform: rotate(180deg); position: absolute;} .sparkline_chart (height: 125px !important;)</style>
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
                <h1>Screener</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="dashboard.php">Home</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Screener</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS-->

    <!-- PAGE CONTENT BEGINS -->
    <div class="container" id="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 mb-30">
				<div class="alert alert-image-bg alert-dismissible fade show text-center margin-bottom-1x p-0">
					<div class="video_content" style="min-height: 260px;">
						<div class="video_title"><p class="video_title_text">Check our Limited Offers</p>
							<h2 class="video_desc">Save up to 50%
								<a href="javascript:void(0)" class="f-s-14 btn btn-primary btn-sm">
									View <i class="fa fa-angle-right mg-l-5"></i>
								</a>
							</h2>
						</div>
						<div class="video-player">
							<video class="video_tag"
								   src="#"
								   poster="assets/img/ui_elements/free-video.jpg"
								   loop="loop" autoplay>
							</video>
						</div>
					</div>
				<span class="alert-close text-white" style="z-index: 2;" data-dismiss="alert"></span>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 order-lg-1 mb-30">
				<div role="tablist">
					<div class="card m-b-20">
					<div class="card-header" role="tab">
						<h6>
							SELECT DIRECTION
						</h6>
					</div>
						<div class="tabpanel">
							<div class="card-body">
							<section class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="widget_box p-15 p-b-50 card">
										<div class="row">
											<div class="col-md-12 sparkline_chart h-150">
											<canvas height="100" id="pvrLineChart_1"></canvas>
												<div class="row">
													<div class="col-lg-6">
														<p class="text-left"><img src="assets/img/bull.png"></p>
													</div>
													<div class="col-lg-6">
														<h4 class="text-left m-t-10">GREED LINE</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="__range __range-step col-lg-12 m-0 p-b-50">
												<h4>BREAK HIGH (MTHS)</h4>
												<input value="3" type="range" max="8" min="1" step="1" list="ticks1">
												<datalist id="ticks1">
													<option value="1">0</option>
													<option value="2">3</option>
													<option value="3">6</option>
													<option value="4">9</option>
													<option value="5">12</option>
													<option value="6">24</option>
													<option value="7">36</option>
													<option value="8">120</option>
												</datalist>
											</div>
										</div>
										<div class="row">
											<div class="__range __range-step col-lg-12 m-0 p-b-50">
												<h4>ACCUMULATIVE VOLUME</h4>
												<input value="3" type="range" max="6" min="1" step="1" list="ticks1">
												<datalist id="ticks1">
													<option value="1">0</option>
													<option value="2">2x</option>
													<option value="3">3x</option>
													<option value="4">4x</option>
													<option value="5">5x</option>
													<option value="6">10x</option>
												</datalist>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 m-0 p-b-50 text-center">
												<span>
													<input type="checkbox" class="color_dark_settings" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="widget_box p-15 p-b-50 card">
										<div class="row">
											<div class="col-md-12 sparkline_chart h-150">
											<canvas height="100" id="pvrLineChart_2"></canvas>
												<div class="row">
													<div class="col-lg-6">
														<h4 class="text-right m-t-10">FEAR LINE</h4>
													</div>
													<div class="col-lg-6">
														<p class="text-right"><img src="assets/img/bear.png"></p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="__range __range-step col-lg-12 m-0 p-b-50">
												<h4>BREAK LOW (MTHS)</h4>
												<input value="3" type="range" max="8" min="1" step="1" list="ticks1">
												<datalist id="ticks1">
													<option value="1">0</option>
													<option value="2">3</option>
													<option value="3">6</option>
													<option value="4">9</option>
													<option value="5">12</option>
													<option value="6">24</option>
													<option value="7">36</option>
													<option value="8">120</option>
												</datalist>
											</div>
										</div>
										<div class="row">
											<div class="__range __range-step col-lg-12 m-0 p-b-50">
												<h4>FEAR VALIDITY</h4>
												<input value="3" type="range" max="6" min="1" step="1" list="ticks1">
												<datalist id="ticks1">
													<option value="1">0</option>
													<option value="2">2x</option>
													<option value="3">3x</option>
													<option value="4">4x</option>
													<option value="5">5x</option>
													<option value="6">10x</option>
												</datalist>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 m-0 p-b-50 text-center">
												<span>
													<input type="checkbox" class="minified_switch_settings" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(13, 169, 239); border-color: rgb(13, 169, 239); box-shadow: rgb(13, 169, 239) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</section>
							</div>
						</div>
					</div>
					<div class="card m-b-20">
					<div class="card-header" role="tab">
						<h6>
							SELECT SEGMENT
						</h6>
					</div>
						<div role="tabpanel">
						<div class="card-body">
							<div class="col-lg-12">
							<form action="" class="validate_1" method="POST">
								<fieldset>
									<div class="col-md-12 mb-30">
										<div class="row">
										<div class="col-lg-6">
											<fieldset>
												<p for="regular_selst" class="text-center">Market</p>
												<select class="form-control" id="regular_selst" name="regular_selst">
													<option value="">Select</option>
													<option value="New York">New York</option>
													<option value="California">California</option>
													<option value="Boston">Boston</option>
													<option value="Texas">Texas</option>
													<option value="Colorado">Colorado</option>
												</select>
											</fieldset>
										</div>
										<div class="col-lg-6">
											<fieldset>
												<p for="regular_selst" class="text-center">Watchlist</p>
												<select class="form-control" id="regular_selst" name="regular_selst">
													<option value="">Select</option>
													<option value="New York">New York</option>
													<option value="California">California</option>
													<option value="Boston">Boston</option>
													<option value="Texas">Texas</option>
													<option value="Colorado">Colorado</option>
												</select>
											</fieldset>
										</div>
										</div>
									</div>
									<div class="text-center"><button type="submit" class="btn btn-sm btn-primary m-r-5">SCREEN STOCK</button></div>
								</fieldset>
							</form>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 order-lg-2 mb-30">
				<aside class="sidebar sidebar-offcanvas">
                    <!-- WIDGET PRICE RANGE-->
                    <section class="widget widget-categories">
						<div class="row card-dash-one mb-30">
							<i class="icon icon-note"></i>
							<div class="wid-content">
								<label></label>
								<h2>SELECTION</h2>
							</div>
						</div>
                        <h3 class="widget-title">Price Range</h3>
                        <form class="price-range-slider mb-30" method="post" data-start-min="250" data-start-max="650"
                              data-min="0" data-max="1000" data-step="1">
                            <div class="ui-range-slider"></div>
                            <footer class="ui-range-slider-footer">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="ui-range-value-min btn btn-outline-secondary col-lg-4">$<span></span>
                                            <input type="hidden">
                                        </div>
										<div class="col-lg-4"></div>
                                        <div class="ui-range-value-max btn btn-outline-secondary col-lg-4">$<span></span>
                                            <input type="hidden">
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </form>
						<h3 class="widget-title">Volume Preference</h3>
                        <form class="price-range-slider" method="post" data-start-min="250" data-start-max="1000"
                              data-min="0" data-max="1000" data-step="2">
                            <div class="ui-range-slider2"></div>
                            <footer class="ui-range-slider-footer">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="ui-range-value-min2 btn btn-outline-secondary col-lg-4">$<span></span>
                                            <input type="hidden">
                                        </div>
										<div class="col-lg-4"></div>
                                        <div class="ui-range-value-max2 btn btn-outline-secondary col-lg-4">$<span></span>
                                            <input type="hidden">
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </form>
                    </section>
                    <!-- WIDGET BRAND FILTER-->
                    <section class="widget">
                        <h3 class="widget-title">Select Union Type</h3>
                        <div class="form-group">
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="ex-radio-4" name="radio2">
								<label class="custom-control-label" for="ex-radio-4">Or</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="ex-radio-5" name="radio2" checked="">
								<label class="custom-control-label" for="ex-radio-5">And</label>
							</div>
						</div>
                    </section>
                    <!-- Widget Size Filter-->
                    <section class="widget">
                        <h3 class="widget-title">Select Quantifier</h3>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="xl">
                            <label class="custom-control-label" for="xl">3% Above&nbsp;<span
                                    class="text-muted">Greed</span> Line</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="l">
                            <label class="custom-control-label" for="l">Break &nbsp;<span
                                    class="text-muted">Greed</span> Within 5%</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="m">
                            <label class="custom-control-label" for="m">3% Below&nbsp;<span
                                    class="text-muted">Fear</span> Line</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="s">
                            <label class="custom-control-label" for="s">Break&nbsp;<span
                                    class="text-muted">Fear</span> Within 5%</label>
                        </div>
                    </section>
                    <section class="widget">
						<h6 class="text-muted text-normal text-uppercase margin-top-2x">Date Range</h6>
						<hr class="margin-bottom-1x">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control date_picker" type="text" id="input-success" value="TODAY DEFAULT">
								</div>
							</div>
						</div>
                    </section>
                </aside>
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

<canvas id="chartJsNewUsers" style="display: none;"></canvas>

<script>
document.querySelectorAll(".__range-step").forEach(function(ctrl) {
	var el = ctrl.querySelector('input');        
	var output = ctrl.querySelector('output'); 
	var newPoint, newPlace, offset;
	el.oninput =function(){ 
		// colorize step options
		ctrl.querySelectorAll("option").forEach(function(opt) {
			if(opt.value<=el.valueAsNumber)                
				opt.style.backgroundColor = 'green';
			else
				opt.style.backgroundColor = '#aaa';
		});           
		// colorize before and after
		var valPercent = (el.valueAsNumber  - parseInt(el.min)) / (parseInt(el.max) - parseInt(el.min));            
		var style = 'background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop('+
		valPercent+', green), color-stop('+
		valPercent+', #aaa));';
		el.style = style;           
	};
	el.oninput();    
});

window.onresize = function(){
	document.querySelectorAll(".__range").forEach(function(ctrl) {
		var el = ctrl.querySelector('input');    
		el.oninput();    
	});
};
</script>

<!-- BEGIN CORE JS -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/scripts.min.js"></script>

<!-- BEGIN PAGE JS -->
<link rel="stylesheet" media="screen" href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
<script src="assets/plugins/chartjs/Chart.min.js"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>