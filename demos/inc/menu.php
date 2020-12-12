<header class="navbar navbar-stuck">
    <!-- BEGIN SEARCH-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search..." autocomplete="off">
        <div class="search-tools">
            <span class="clear-search">Clear</span>
            <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    </form>
    <!-- END SEARCH-->
    <div class="site-branding">
        <div class="inner">
            <!-- OFF-CANVAS TOGGLE (#MENU-CATEGORIES)-->
            <a class="offcanvas-toggle cats-toggle" href="#menu-categories" data-toggle="offcanvas"></a>
            <!-- OFF-CANVAS TOGGLE (#MOBILE-MENU)-->
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- SITE LOGO-->
            <a class="site-logo" href="dashboard.php">
                <img src="assets/img/logo.png" alt="Snap Tradar">
            </a>
        </div>
    </div>
    <!-- BEGIN MAIN NAVIGATION-->
    <nav class="site-menu">
        <ul>
            <li class="has-megamenu active">
                <a href="dashboard.php"><span>Home</span></a>
            </li>
            <li class="has-megamenu">
                <a href="screener.php"><span>Screener</span></a>
            </li>
            <li>
                <a href="watchlist.php"><span>Watchlist</span></a>
            </li>
            <li>
                <a href="profile.php"><span>Profile</span></a>
            </li>
            <li>
                <a href="faq.php"><span>FAQ</span></a>
            </li>
            <li>
				<a href="contact_us.php"><span>Contact Us</span></a>
            </li>
        </ul>
    </nav>
    <!-- END MAIN NAVIGATION-->

    <!-- BEGIN TOOLBAR-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search">
                    <i class="icon-search"></i>
                </div>
                <div class="cart">
                    <a href="javascript:void(0)"></a><i class="icon-bell"></i>
                    <span class="count">3</span><span class="subtotal">New Notification</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item">
                            <span class="dropdown-product-remove">
                                <i class="icon-cross"></i>
                            </span>
                            <a class="dropdown-product-thumb" href="javascript:void(0)">
                                <img src="assets/img/avatar/user-1.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="javascript:void(0)">
                                    New User Registered
                                </a>
                                <span class="dropdown-product-details">
                                    Lorem Ipsum is simply dummy text.
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-product-item">
                            <span class="dropdown-product-remove">
                                <i class="icon-cross"></i>
                            </span>
                            <a class="dropdown-product-thumb" href="javascript:void(0)">
                                <img src="assets/img/avatar/user-2.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="javascript:void(0)">
                                    John Smith
                                </a>
                                <span class="dropdown-product-details">
                                    Lorem Ipsum is simply dummy text.
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-product-item">
                            <span class="dropdown-product-remove">
                                <i class="icon-cross"></i>
                            </span>
                            <a class="dropdown-product-thumb" href="javascript:void(0)">
                                <img src="assets/img/avatar/user-3.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="javascript:void(0)">
                                    Server Error Reports
                                </a>
                                <span class="dropdown-product-details">
                                    Lorem Ipsum is simply dummy text.
                                </span>
                            </div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column">
                                <a class="btn btn-sm btn-block btn-secondary" href="javascript:void(0)">
                                    Clear All
                                </a>
                            </div>
                            <div class="column">
                                <a class="btn btn-sm btn-block btn-success" href="javascript:void(0)">
                                    View All
                                </a>
                            </div>
                            <div class="column d-sm-block d-md-none" id="close_notification">
                                <a class="btn btn-sm btn-block btn-success" href="javascript:void(0)">
                                    Close
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account">
                    <a href="javascript:void(0)"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava">
                                <img src="assets/img/avatar/default-avatar.jpg" alt="Administrator">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Administrator</h6>
                                <span class="text-xs text-muted">snaptradar</span>
                            </div>
                        </li>
                        <li><a href="profile.php"> <i class="icon-head"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"> <i class="icon-mail"></i> Messages</a></li>
                        <li><a href="javascript:void(0)"> <i class="icon-cog"></i> Settings</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="javascript:void(0)"> <i class="icon-server"></i> Lock Screen</a></li>
                        <li><a href="login.php"> <i class="icon-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOOLBAR-->
</header>