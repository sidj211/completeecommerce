@section('information')

    @foreach($information as $x)
        <li><a href="#">{{$x->info}}</a></li>
    @endforeach

@endsection

@section('extrainformation')

    @foreach($extra as $y)
        <li><a href="#">{{$y->extra}}</a></li>
    @endforeach


@endsection

@section('my_account')

    @foreach($account as $z)
        <li><a href="#">{{$z->info}}</a></li>

    @endforeach

@endsection


@section('copyright')
    {{$copyright->copyright}}
@endsection

@section('about_us')
    {{$result->about_us}}
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


