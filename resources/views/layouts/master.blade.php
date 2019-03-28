<!doctype html>
<html lang="en">

<head>
    <!-- Basic page needs =========================================== -->
    <title>MobileMafia|Home</title>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('/')}}/proassets/images/favicon.png">

    <!-- Google web fonts
    ============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/css/animate.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/css/fontello.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/css/bootstrap.min.css">

    <!-- Theme CSS
    ============================================ -->
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/js/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/js/arcticmodal/jquery.arcticmodal.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/proassets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="{{URL::to('/')}}/proassets/js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/proassets/css/oldie.css">

</head>


<body class="front_page promo_popup">


<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

<div class="wide_layout">

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="type_6">

        <!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

        <div class="top_part">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-7 col-sm-8">

                        <!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->

                        <p>Welcom visitor <a href="/login" data-modal-url="/login">Login</a> or <a href="/register">Register</a></p>

                        <!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

                    </div> <!--/ [col]-->

                    <div class="col-lg-6 col-md-5 col-sm-4">

                        <div class="clearfix">



                        </div><!--/ .clearfix-->

                    </div><!--/ [col]-->

                </div><!--/ .row-->

            </div><!--/ .container -->

        </div><!--/ .top_part -->

        <!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

        <hr>

        <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

        <div class="bottom_part">

            <div class="container">

                <div class="row">

                    <div class="main_header_row">

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

                            <a href="/product" class="logo">

                                <img src="{{URL::to('/')}}/proassets/images/sitelogo.png" alt="">

                            </a>

                            <!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->


                            <!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                        <div class="col-sm-6">

                            <!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

                            <form class="clearfix search">

                                <input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">

                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                                <div class="search_category alignleft">

                                    <div class="open_categories">All Categories</div>

                                    <ul class="categories_list dropdown">

                                        @yield('category')

                                    </ul>

                                </div><!--/ .search_category.alignleft-->

                                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                                <button class="button_blue def_icon_btn alignleft"></button>

                            </form><!--/ #search-->

                            <!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                    </div><!--/ .main_header_row-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .bottom_part -->

        <!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

        <div id="main_navigation_wrap">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

                        <div class="sticky_inner type_2">

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            {{--<div class="nav_item size_4">--}}

                                {{--<button class="open_menu"></button>--}}

                                {{--<!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->--}}

                                {{--<ul class="theme_menu cats dropdown">--}}

                                    {{--@yield('categorydropdown')--}}


                                {{--</ul>--}}

                                {{--<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->--}}

                            {{--</div><!--/ .nav_item-->--}}

                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            <div class="nav_item">

                                <nav class="main_navigation">

                                    <ul>

                                        <li ><a href="/">Home</a></li>
                                        <li class="has_submenu">

                                            <a href="#">All Categories</a>

                                            <!-- - - - - - - - - - - - - - Submenu (level 2) - - - - - - - - - - - - - - - - -->

                                            @yield('categoryname')

                                            <!-- - - - - - - - - - - - - - End submenu (level 2) - - - - - - - - - - - - - - - - -->

                                        </li>
                                        <li><a href="/todaydeals">Today Deals</a></li>
                                        <li><a href="/featuredproduct">Featured Products</a></li>




                                    </ul>

                                </nav><!--/ .main_navigation-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            {{--<div class="nav_item size_4">--}}



                            {{--</div><!--/ .nav_item-->--}}

                            <!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            {{--<div class="nav_item size_4">--}}



                            {{--</div><!--/ .nav_item-->--}}

                            <!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->


                            @yield('cart')


                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

                        </div><!--/ .sticky_inner -->

                        <!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

                    </div><!--/ [col]-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .main_navigation_wrap-->

        <!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

    </header>

    <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->


               @yield('content')


<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

<footer id="footer">

    <div class="container">

        <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

        <div class="infoblocks_container">

            <ul class="infoblocks_wrap">

                <li>
                    <a  class="infoblock type_1">

                        <i class="icon-paper-plane"></i>
                        <span class=""><b>Fast &amp; Free Delivery</b></span>

                    </a><!--/ .infoblock-->
                </li>

                <li>
                    <a  class="infoblock type_1">

                        <i class="icon-lock"></i>
                        <span class=""><b>Safe &amp; Secure Payment</b></span>

                    </a><!--/ .infoblock-->
                </li>

                <li>
                    <a  class="infoblock type_1">

                        <i class="icon-money"></i>
                        <span class=""><b>100% Money back Guaranted</b></span>

                    </a><!--/ .infoblock-->
                </li>

            </ul><!--/ .infoblocks_wrap.section_offset.clearfix-->

        </div><!--/ .infoblocks_container -->

        <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->

    </div><!--/ .container -->

    <!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

    <div class="footer_section">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <!-- - - - - - - - - - - - - - About us widget- - - - - - - - - - - - - - - - -->

                    <section class="widget">

                        <h4>About Us</h4>

                        <p class="about_us">@yield('about_us')</p>

                        <!-- - - - - - - - - - - - - - Social icon's list - - - - - - - - - - - - - - - - -->

                        <ul class="social_btns">

                            <li>
                                <a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn  social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_pinterest tooltip_container"><i class="icon-pinterest-3"></i><span class="tooltip top">Pinterest</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_flickr tooltip_container"><i class="icon-flickr-1"></i><span class="tooltip top">Flickr</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_youtube tooltip_container"><i class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_vimeo tooltip_container"><i class="icon-vimeo-2"></i><span class="tooltip top">Vimeo</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_instagram tooltip_container"><i class="icon-instagram-4"></i><span class="tooltip top">Instagram</span></a>
                            </li>

                            <li>
                                <a href="#" class="icon_btn middle_btn social_linkedin tooltip_container"><i class="icon-linkedin-5"></i><span class="tooltip top">LinkedIn</span></a>
                            </li>

                        </ul>

                        <!-- - - - - - - - - - - - - - End social icon's list - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of about us widget - - - - - - - - - - - - - - - - -->

                </div><!--/ [col]-->

                <div class="col-md-2 col-sm-6">

                    <!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->

                    <section class="widget">

                        <h4>Information</h4>

                        <ul class="list_of_links">

                            @yield('information')

                        </ul>

                    </section><!--/ .widget-->

                    <!-- - - - - - - - - - - - - - End of information widget - - - - - - - - - - - - - - - - -->

                </div><!--/ [col]-->

                <div class="col-md-2 col-sm-6">

                    <!-- - - - - - - - - - - - - - Extras widget - - - - - - - - - - - - - - - - -->

                    <section class="widget">

                        <h4>Extras</h4>

                        <ul class="list_of_links">

                            @yield('extrainformation')

                        </ul>

                    </section><!--/ .widget-->

                    <!-- - - - - - - - - - - - - - End of extras widget - - - - - - - - - - - - - - - - -->

                </div><!--/ [col]-->

                <div class="col-md-2 col-sm-6">

                    <!-- - - - - - - - - - - - - - My account widget - - - - - - - - - - - - - - - - -->

                    <section class="widget">

                        <h4>My Account</h4>

                        <ul class="list_of_links">

                           @yield('my_account')

                        </ul>

                    </section><!--/ .widget-->

                    <!-- - - - - - - - - - - - - - End my account widget - - - - - - - - - - - - - - - - -->

                </div>

                <div class="col-md-3 col-sm-6">

                    <!-- - - - - - - - - - - - - - Blog widget - - - - - - - - - - - - - - - - -->


                    <!-- - - - - - - - - - - - - - End of blog widget - - - - - - - - - - - - - - - - -->

                </div><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .container -->

    </div><!--/ .footer_section_2-->

    <!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->

    <hr>

    <!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->

    <div class="footer_section_3 align_center">

        <div class="container">

            <!-- - - - - - - - - - - - - - Payments - - - - - - - - - - - - - - - - -->

            <ul class="payments">

                <li><img src="{{URL::to('/')}}/proassets/images/payment_1.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_2.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_3.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_4.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_5.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_6.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_7.png" alt=""></li>
                <li><img src="{{URL::to('/')}}/proassets/images/payment_8.png" alt=""></li>

            </ul>

            <!-- - - - - - - - - - - - - - End of payments - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Footer navigation - - - - - - - - - - - - - - - - -->



            <!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->

            <p class="copyright">&copy; @yield('copyright') <a href="index.html">MoblieMafia</a>. All Rights Reserved.</p>

        </div><!--/ .container -->

    </div><!--/ .footer_section-->

    <!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->

</footer>

<!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->

</div><!--/ [layout]-->

<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Social feeds - - - - - - - - - - - - - - - - -->


<!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->

<!-- Include Libs & Plugins
============================================ -->
<script src="{{URL::to('/')}}/proassets/js/jquery-2.1.1.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/queryloader2.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/jquery.appear.js"></script>
<script src="{{URL::to('/')}}/proassets/js/owlcarousel/owl.carousel.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/jquery.countdown.plugin.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/jquery.countdown.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/arcticmodal/jquery.arcticmodal.js"></script>
<script src="{{URL::to('/')}}/twitter/jquery.tweet.min.js"></script>
<script src="{{URL::to('/')}}/proassets/js/colorpicker/colorpicker.js"></script>
<script src="{{URL::to('/')}}/proassets/js/retina.min.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

<!-- Theme files
============================================ -->
<script src="{{URL::to('/')}}/proassets/js/theme.plugins.js"></script>
<script src="{{URL::to('/')}}/proassets/js/theme.core.js"></script>

</body>
</html>