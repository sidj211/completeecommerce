@extends('layouts.master')

@include('includes.footer')
@section('categoryname')

    <ul class="theme_menu submenu">
        @foreach($pro as $categories)
            <li class="has_submenu ">

                <a href="{{route('category.related.product',$categories->id)}}">{{$categories->name}}</a>

                <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                <ul class="theme_menu submenu">
                    @foreach($categories->subcategories as $bcategories)
                        <li class=""><a href="{{route('subcategory.related.product',$bcategories->id)}}">{{$bcategories->name}}</a></li>
                    @endforeach
                </ul>

                <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

            </li>
        @endforeach

    </ul>

@endsection

@section('cart')
    <div class="nav_item size_3">

        <button id="open_shopping_cart" class="open_button" data-amount="{{$count}}">
            <b class="title">My Cart</b>
            <b class="total_price"> ₹{{$total}}</b>
        </button>

        <!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

        <div class="shopping_cart dropdown">

            @foreach($cart as $carts)
                <div class="animated_item">

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="clearfix sc_product">

                        <a href="#" class="product_thumb"><img src="{{URL::to('/')}}{{$carts->options->img }}" style="width:60px;height:60px;" alt=""></a>

                        <a href="#" class="product_name">{{$carts->name}}-></a>

                        <p>{{$carts->qty}} x {{$carts->price}}</p>

                        <a href="/deleteitem/{{$carts->rowId}}"><button class="close"></button></a>

                    </div><!--/ .clearfix.sc_product-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                </div><!--/ .animated_item-->
            @endforeach
            <div class="animated_item">

                <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

                <ul class="total_info">

                    <li><span class="price">Tax:</span> ₹{{$tax}}</li>

                    <li><span class="price">Discount:</span></li>

                    <li class="total"><b><span class="price">Total:</span> ₹{{$total}}</b></li>

                </ul>

                <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

            </div><!--/ .animated_item-->

            <div class="animated_item">

                <a href="/cart" class="button_grey">View Cart</a>

                <a href="/checkout" class="button_blue">Checkout</a>

            </div><!--/ .animated_item-->

        </div><!--/ .shopping_cart.dropdown-->

        <!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

    </div><!--/ .nav_item-->
@endsection

@section('categorydropdown')

    @foreach($pro as $categories)
        <li class="has_megamenu animated_item">

            <a href="{{route('category.related.product',$categories->id)}}">{{$categories->name}}</a>

            <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

            <div class="mega_menu clearfix">

                <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                <div class="mega_menu_item">

                    <ul class="list_of_links">

                        @foreach($categories->subcategories as $bcategories)
                            <li><a href="{{route('subcategory.related.product',$bcategories->id)}}">{{$bcategories->name}}</a></li>
                        @endforeach


                    </ul>

                </div><!--/ .mega_menu_item-->

                <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->


                <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

            </div><!--/ .mega_menu-->

            <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

        </li>
    @endforeach

@endsection

@section('category')
    @foreach($pro as $categories)
        <li class="animated_item"><a href="#">{{$categories->name}}</a></li>
    @endforeach
@endsection

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">



            </ul>

            <div class="row">

                <aside class="col-md-3 col-sm-4 has_mega_menu">

                    <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Categories</h3>

                        <ul class="theme_menu cats">


                            @foreach($pro as $categories)
                                <li class="has_megamenu">

                                    <a href="{{route('category.related.product',$categories->id)}}">{{$categories->name}}</a>

                                    <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu clearfix">

                                        <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                        <div class="mega_menu_item">

                                            <ul class="list_of_links">

                                                @foreach($categories->subcategories as $bcategories)
                                                    <li><a href="{{route('subcategory.related.product',$bcategories->id)}}">{{$bcategories->name}}</a></li>
                                                @endforeach
                                            </ul>

                                        </div><!--/ .mega_menu_item-->

                                        <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->



                                        <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .mega_menu-->

                                    <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                </li>

                            @endforeach




                        </ul>

                    </section>

                    <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->


                    <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <a href="#" class="banner">

                            <img src="images/banner_img_10.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Already Viewed Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_4.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Aenean auctor wisi et urna...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <a href="#" class="banner">

                            <img src="images/banner_img_11.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                </aside>

                <main class="col-md-9 col-sm-8">

                    <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3 class="widget_title offset_title">Today's Deals</h3>

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                           @foreach($todaydeals as $todaydeal)
                            <div class="theme_box clearfix">

                                <!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

                                <div class="single_product">

                                    <!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

                                    <div class="image_preview_container">

                                        <img src="{{URL::to('/')}}{{$todaydeal->photo->file}}" alt="">

                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                        <div class="label_offer percentage">

                                            <div>{{$todaydeal->P_discount_id}}%</div>OFF

                                        </div>

                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .image_preview_container-->

                                    <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                    <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                    <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

                                <div class="single_product_description">

                                    <h3 class="offset_title"><a href="#">{{$todaydeal->P_name}}</a></h3>

                                    <div class="description_section v_centered">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->


                                        <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                                    </div>

                                    <div class="description_section">

                                        <table class="product_info">

                                            <tbody>

                                            <tr>

                                                <td>Manufacturer: </td>
                                                <td><a href="#">Chanel</a></td>

                                            </tr>

                                            <tr>

                                                <td>Availability: </td>
                                                <td><span class="in_stock">{{$todaydeal->availability}}</span> 20 item(s)</td>

                                            </tr>



                                            </tbody>

                                        </table>

                                    </div>

                                    <hr>

                                    <div class="description_section">

                                        <p>{{$todaydeal->P_description}}</p>

                                    </div>

                                    <div class="description_section">

                                        <div class="table_wrap product_price_table">

                                            <table>

                                                <tbody>

                                                <tr>

                                                    <td class="special_price">

                                                        Special Price:

                                                        <div class="price">$5.99</div>

                                                    </td>

                                                    <td class="old_price">

                                                        Old Price:

                                                        <div class="price">{{$todaydeal->P_total_retail_price}}</div>

                                                    </td>

                                                    <td class="save">

                                                        You Save:

                                                        <div class="price">$4.00</div>

                                                    </td>

                                                </tr>

                                                </tbody>

                                            </table>

                                        </div>
                                        @if($todaydeal->P_quantity < 20)
                                        <p class="hurry_message"><span>Hurry! Only 20 item(s) left!</span> 17 item(s) already purchased</p>
                                            @else
                                            <p>Product Available</p>
                                       @endif
                                    </div>

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="buttons_row">

                                        <button class="addtocart button_blue middle_btn" data-id="{{$todaydeal->id}}">Add to Cart</button>

                                        <button class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

                                        <button class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                    </div>

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

                            </div>
                           @endforeach
                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->


                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div>

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                    </section>

                    <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <header class="top_box on_the_sides">

                            <div class="left_side clearfix v_centered">

                                <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

                                <div class="v_centered">

                                    <span>Sort by:</span>

                                    <div class="custom_select sort_select">

                                        <select name="">

                                            <option value="Default">Default</option>
                                            <option value="Price">Price</option>
                                            <option value="Name">Name</option>
                                            <option value="Date">Date</option>

                                        </select>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->

                                <div class="v_centered">

                                    <span>Show:</span>

                                    <div class="custom_select">

                                        <select name="">

                                            <option value="15">15</option>
                                            <option value="12">12</option>
                                            <option value="9">9</option>
                                            <option value="6">6</option>
                                            <option value="3">3</option>

                                        </select>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->

                            </div>

                            <div class="right_side">

                                <!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->



                                <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

                            </div>

                        </header>

                        <div class="table_layout" id="products_container">

                            <div class="table_row">

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                 @foreach($featuredproducts as $featuredpro)
                                <div class="table_cell col-lg-4 col-sm-4">

                                    <div class="product_item">

                                        <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                        <div class="image_wrap">

                                            <img src="{{URL::to('/')}}{{$featuredpro->photo->file}}" style="height: 150px;width: 200px;" alt="">

                                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                            <div class="actions_wrap">

                                                <div class="centered_buttons">

                                                    <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    <a href="#" class="addtocart button_blue middle_btn add_to_cart" data-id="{{$featuredpro->id}}">Add to Cart</a>

                                                </div><!--/ .centered_buttons -->

                                                <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                            </div><!--/ .actions_wrap-->

                                            <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/. image_wrap-->

                                        <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                        <div class="description">

                                            <a href="#">{{$featuredpro->P_name}}</a>

                                            <div class="clearfix product_info">

                                                <p class="product_price alignleft"><b>{{$featuredpro->P_total_retail_price}}</b></p>

                                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                <ul class="rating alignright">

                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li></li>

                                                </ul>

                                                <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                            </div>

                                        </div>

                                        <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

                                        <div class="full_description">

                                            <a href="#" class="product_title">Sed ut perspiciatis unde, Liqui-gels 24 capsules</a>

                                            <a href="#" class="product_category">Beauty Clearance</a>

                                            <div class="v_centered product_reviews">

                                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                <ul class="rating">

                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li></li>

                                                </ul>

                                                <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

                                                <ul class="topbar">

                                                    <li><a href="#">3 Review(s)</a></li>
                                                    <li><a href="#">Add Your Review</a></li>

                                                </ul>

                                                <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                                            </div>

                                            <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

                                            <a href="#" class="learn_more">Learn More</a>

                                        </div>

                                        <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                                        <div class="actions">

                                            <p class="product_price bold">$5.99</p>

                                            <ul class="seller_stats">

                                                <li>Shipping: <span class="success">Free Shipping</span></li>
                                                <li>Availability: <span class="success">in stock</span></li>
                                                <li class="seller_info_wrap">

                                                    Seller: <span class="seller_name">johnsmith</span>

                                                    <div class="seller_info_dropdown">

                                                        <ul class="seller_stats">

                                                            <li>

                                                                <ul class="topbar">

                                                                    <li>China (Mainland)</li>

                                                                    <li><a href="#">Contact Details</a></li>

                                                                </ul>

                                                            </li>

                                                            <li><span class="bold">99.8%</span> Positive Feedback</li>

                                                        </ul>

                                                        <div class="v_centered">

                                                            <a href="#" class="button_blue mini_btn">Contact Seller</a>

                                                            <a href="#" class="small_link">Chat Now</a>

                                                        </div>

                                                    </div>

                                                </li>

                                            </ul>

                                            <ul class="buttons_col">

                                                <li><a href="#" class="addtocart button_blue middle_btn add_to_cart" >Add to Cart</a></li>

                                                <li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

                                                <li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

                                            </ul>

                                        </div>

                                        <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .product_item-->

                                </div>
                                 @endforeach
                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->



                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->



                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_row -->



                        </div><!--/ .table_layout -->

                        <footer class="bottom_box on_the_sides">

                            <div class="left_side">

                                <p>Showing 1 to 3 of 45 (15 Pages)</p>

                            </div>

                            <div class="right_side">

                               {{$featuredproducts->render()}}

                            </div>

                        </footer>

                    </div>

                    <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->
              @include('includes.script')


                </main>

            </div><!--/ .row -->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->


@endsection