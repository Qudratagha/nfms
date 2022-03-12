    <div class="page">
        <div class="page-main">
            <!--app-header-->
            <div class="app-header  header hor-topheader d-flex">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="{{route('dashboard')}}">
                            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img main-logo" alt="Hogo logo">
                            <img src="{{asset('assets/images/brand/icon.png')}}" class="header-brand-img icon-logo" alt="Hogo logo">
                        </a><!-- logo-->
{{--                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href=""></a>--}}
                        <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
                        <a href="#" data-toggle="search" class="nav-link nav-link  navsearch"><i class="fa fa-search"></i></a><!-- search icon -->
                        <div class="header-form">
                            <form class="form-inline">
                                <div class="search-element mr-3">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <span class="Search-icon"><i class="fa fa-search"></i></span>
                                </div>
                            </form><!-- search-bar -->
                        </div>

                        <div class="d-flex order-lg-2 ml-auto header-rightmenu">

                            <div class="dropdown">
                                <ul class="nav header-nav">
                                    <li class="nav-item dropdown header-option m-2">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-user mr-2"></i>
{{--                                            {{ Auth::user()->name }}--}}
                                            <i class="mr-2"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-left">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="fe fe-log-out mr-2"></i> {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- logout -->
                            <div class="dropdown">
                                <a  class="nav-link icon full-screen-link" id="fullscreen-button">
                                    <i class="fe fe-maximize-2"></i>
                                </a>
                            </div><!-- full-screen -->
                        </div>
                    </div>
                </div>
            </div>
            <!--app-header end-->

            <!-- Horizontal-menu -->
            <div class="horizontal-main hor-menu clearfix">
                <div class="horizontal-mainwrapper container clearfix">
                    <nav class="horizontalMenu clearfix">
                        <ul class="horizontalMenu-list">
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-device-desktop hor-icon"></i> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="index.html">Dashboard 01</a></li>
                                    <li aria-haspopup="true"><a href="index2.html">Dashboard 02</a></li>
                                    <li aria-haspopup="true"><a href="index3.html">Dashboard 03</a></li>
                                    <li aria-haspopup="true"><a href="index4.html">Dashboard 04</a></li>
                                    <li aria-haspopup="true"><a href="index5.html">Dashboard 05</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-th-large-outline hor-icon"></i> Apps <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="cards.html">Cards design</a></li>
                                    <li aria-haspopup="true"><a href="cards-image.html">Image  Cards design</a></li>
                                    <li aria-haspopup="true"><a href="chat.html">Default Chat</a></li>
                                    <li aria-haspopup="true"><a href="notify.html">Notifications</a></li>
                                    <li aria-haspopup="true"><a href="sweetalert.html">Sweet alerts</a></li>
                                    <li aria-haspopup="true"><a href="rangeslider.html">Range slider</a></li>
                                    <li aria-haspopup="true"><a href="scroll.html">Content Scroll bar</a></li>
                                    <li aria-haspopup="true"><a href="counters.html">Counters</a></li>
                                    <li aria-haspopup="true"><a href="loaders.html">Loaders</a></li>
                                    <li aria-haspopup="true"><a href="time-line.html">Time Line</a></li>
                                    <li aria-haspopup="true"><a href="rating.html">Rating</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="widgets.html" class=""><i class="typcn typcn-arrow-move-outline"></i> widgets</a></li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-chart-pie-outline"></i> Charts <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-morris.html">Morris Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-js.html">Charts js</a></li>
                                    <li aria-haspopup="true"><a href="chart-peity.html">Pie Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-echart.html">Echart Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-flot.html">Flot Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-high.html">High Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-nvd3.html">Nvd3 Charts</a></li>
                                    <li aria-haspopup="true"><a href="chart-dygraph.html">Dygraph Charts</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-briefcase"></i> Advanced UI </a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="modal.html">Modal</a></li>
                                    <li aria-haspopup="true"><a href="tooltipandpopover.html">Tooltip and popover</a></li>
                                    <li aria-haspopup="true"><a href="progress.html">Progress</a></li>
                                    <li aria-haspopup="true"><a href="carousel.html">Carousels</a></li>
                                    <li aria-haspopup="true"><a href="accordion.html">Accordions</a></li>
                                    <li aria-haspopup="true"><a href="tabs.html">Tabs</a></li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Calendar</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="calendar.html">Default calendar</a></li>
                                            <li aria-haspopup="true"><a href="calendar2.html">Full calendar</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true"><a href="maps.html">Maps</a></li>
                                    <li aria-haspopup="true"><a href="headers.html">Headers</a></li>
                                    <li aria-haspopup="true"><a href="footers.html">Footers</a></li>
                                    <li aria-haspopup="true"><a href="crypto-currencies.html">Crypto-currencies</a></li>
                                    <li aria-haspopup="true"><a href="users-list.html">User List</a></li>
                                </ul>
                            </li>

                            <li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="typcn typcn-spanner-outline"></i> Elements  <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <div class="horizontal-megamenu clearfix">
                                    <div class="container">
                                        <div class="mega-menubg">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li aria-haspopup="true"><a href="alerts.html">Alerts</a></li>
                                                        <li aria-haspopup="true"><a href="buttons.html">Buttons</a></li>
                                                        <li aria-haspopup="true"><a href="colors.html">Colors</a></li>
                                                        <li aria-haspopup="true"><a href="avatars.html">Avatars</a></li>
                                                        <li aria-haspopup="true"><a href="dropdown.html">Drop downs</a></li>
                                                        <li aria-haspopup="true"><a href="thumbnails.html">Thumbnails</a></li>
                                                        <li aria-haspopup="true"><a href="mediaobject.html">Media Object</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li aria-haspopup="true"><a href="list.html">List</a></li>
                                                        <li aria-haspopup="true"><a href="tags.html">Tags</a></li>
                                                        <li aria-haspopup="true"><a href="pagination.html">Pagination</a></li>
                                                        <li aria-haspopup="true"><a href="navigation.html">Navigation</a></li>
                                                        <li aria-haspopup="true"><a href="typography.html">Typography</a></li>
                                                        <li aria-haspopup="true"><a href="breadcrumbs.html">Breadcrumbs</a></li>
                                                        <li aria-haspopup="true"><a href="badge.html">Badges</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li aria-haspopup="true"><a href="email.html">Email</a></li>
                                                        <li aria-haspopup="true"><a href="emailservices.html">Email Inbox</a></li>
                                                        <li aria-haspopup="true"><a href="gallery.html">Gallery</a></li>
                                                        <li aria-haspopup="true"><a href="about.html">About Company</a></li>
                                                        <li aria-haspopup="true"><a href="services.html">Services</a></li>
                                                        <li aria-haspopup="true"><a href="faq.html">FAQS</a></li>
                                                        <li aria-haspopup="true"><a href="terms.html">Terms and Conditions</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li aria-haspopup="true"><a href="empty.html">Empty Page</a></li>
                                                        <li aria-haspopup="true"><a href="blog.html">Blog</a></li>
                                                        <li aria-haspopup="true"><a href="invoice.html">Invoice</a></li>
                                                        <li aria-haspopup="true"><a href="pricing.html">Pricing Tables</a></li>
                                                        <li aria-haspopup="true"><a href="jumbotron.html">Jumbotron</a></li>
                                                        <li aria-haspopup="true"><a href="panels.html">Panels</a></li>
                                                        <li aria-haspopup="true"><a href="search.html">Search page</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li aria-haspopup="true"><a href="#" class="sub-icon "><i class="typcn typcn-cog-outline"></i> Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="profile.html">Profile</a></li>
                                    <li aria-haspopup="true"><a href="editprofile.html">Edit Profile</a></li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Tables</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="tables.html">Default table</a></li>
                                            <li aria-haspopup="true"><a href="datatable.html">Data Table</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Forms</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="form-elements.html">Form Elements</a></li>
                                            <li aria-haspopup="true"><a href="form-wizard.html">Form-wizard</a></li>
                                            <li aria-haspopup="true"><a href="wysiwyag.html">Text Editor</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">E-commerce</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="shop.html">Products</a></li>
                                            <li aria-haspopup="true"><a href="shop-des.html">Product Details</a></li>
                                            <li aria-haspopup="true"><a href="cart.html">Shopping Cart</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Custom </a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="login.html">Login</a></li>
                                            <li aria-haspopup="true"><a href="register.html">Register</a></li>
                                            <li aria-haspopup="true"><a href="forgot-password.html">Forgot Password</a></li>
                                            <li aria-haspopup="true"><a href="lockscreen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Error Pages</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="400.html">400 Error</a></li>
                                            <li aria-haspopup="true"><a href="401.html">401 Error</a></li>
                                            <li aria-haspopup="true"><a href="403.html">403 Error</a></li>
                                            <li aria-haspopup="true"><a href="404.html">404 Error</a></li>
                                            <li aria-haspopup="true"><a href="500.html">500 Error</a></li>
                                            <li aria-haspopup="true"><a href="503.html">503 Error</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" ><a href="construction.html">Under Construction</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-point-of-interest-outline"></i> Icons <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="icons.html">Font Awesome</a></li>
                                    <li aria-haspopup="true"><a href="icons2.html">Material Design Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons3.html">Simple Line Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons4.html">Feather Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons5.html">Ionic Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons6.html">Flag Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons7.html">pe7 Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons8.html">Themify Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons9.html">Typicons Icons</a></li>
                                    <li aria-haspopup="true"><a href="icons10.html">Weather Icons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!--Nav end -->
                </div>
            </div>
            <!-- Horizontal-menu end -->
        </div>
    </div>