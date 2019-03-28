@extends('layouts.master')

{{--@include('includes.footer')--}}

@section('content')

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>Address</li>

            </ul>


            <!-- - - - - - - - - - - - - - Checkout method - - - - - - - - - - - - - - - - -->


            @if(count($address)==0)

                <h1>No Address</h1>

        @else<!-- - - - - - - - - - - - - - End of checkout method - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Billing information - - - - - - - - - - - - - - - - -->

            {{--<section class="section_offset">--}}

                {{--<h3>Your Address</h3>--}}

                {{--<div class="theme_box">--}}

                    {{--<div class="row">--}}

                        {{--<div class="col-sm-6">--}}

                            {{--<!-- - - - - - - - - - - - - - Form v1 - - - - - - - - - - - - - - - - -->--}}

                            {{--<form>--}}



                                {{--<div class="form_el" style="margin-bottom:10px;" >--}}
                                    {{--@foreach($address as $addresses)--}}
                                        {{--<div class="theme_box card-body " style="background-color: white">--}}
                                            {{--<input type="" name="add" value="{{$addresses->id}}" id="{{$addresses->id}}">--}}
                                            {{--<label for="{{$addresses->id}}">Address:{{$addresses->address}}  <br>--}}
                                                {{--City:{{$addresses->city}} <br> State: {{$addresses->state}} <br> Country:{{$addresses->country}}</label>--}}


                                        {{--</div>--}}
                                        {{--<br>--}}
                                    {{--@endforeach--}}
                                {{--</div>--}}


                            {{--</form>--}}

                            {{--<!-- - - - - - - - - - - - - - End of form v1 - - - - - - - - - - - - - - - - -->--}}

                        {{--</div><!--/ [col]-->--}}



                    {{--</div><!--/ .row -->--}}

                {{--</div><!--/ .theme_box -->--}}

            {{--</section><!--/ .section_offset -->--}}

            <section class="col-sm-12 col-lg-12">

                <h3>YOUR ADDRESS</h3>

                <!-- - - - - - - - - - - - - - Tabs v1 - - - - - - - - - - - - - - - - -->

                <div class="tabs initialized">

                    <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                    <ul class="tabs_nav clearfix">
                         @foreach($address as $add)
                        <li style="no"><a href="#tab-{{$add->id}}">Address</a></li>
                       @endforeach

                    </ul>

                    <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                    <div class="tab_containers_wrap" style="height: 202px;">

                        <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                        @foreach($address as $addresses)
                        <div id="tab-{{$addresses->id}}" class="tab_container">

                            <p> Address : {{$addresses->address}}</p>
                            <p> City : {{$addresses->city}}</p>
                            <p> Address : {{$addresses->state}}</p>
                            <p> Address : {{$addresses->country}}</p>
                        </div><!--/ #tab-1-->
                       @endforeach
                        <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->



                    </div><!--/ .tab_containers_wrap -->

                    <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                </div><!--/ .tabs-->

                <!-- - - - - - - - - - - - - - End of tabs v1 - - - - - - - - - - - - - - - - -->

            </section>



            <section class="addsection section_offset col-sm-10" style="display:none">

                <h3>Add New Address</h3>

                <div class="container">

                    <form method="POST" action="/checkout">
                        {{ csrf_field() }}
                        <ul>
                            <li class="row">

                                <div class="col-xs-12">

                                    <label for="address" class="required">Address</label>
                                    <input type="text" name="address" id="address">

                                </div><!--/ [col] -->

                            </li><!-- / .row -->

                            <li class="row">

                                <div class="col-xs-12">

                                    <input type="text" name="address">

                                </div><!--/ [col] -->

                            </li><!--/ .row -->

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="city" class="required">City</label>
                                    <input type="text" name="city" id="city">

                                </div><!--/ [col] -->

                                <div class="col-sm-6">


                                </div><!--/ [col] -->

                                <div class="col-sm-6">

                                    <label class="required">State/Province</label>

                                    <div class="custom_select">

                                        <select name="state">

                                            <option value="Alabama">Alabama</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Kansas">Kansas</option>

                                        </select>

                                    </div>

                                </div><!--/ [col] -->

                            </li><!--/ .row -->

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="postal_code" class="required">Zip/Postal Code</label>
                                    <input type="text" name="Postal_code" id="postal_code">

                                </div><!--/ [col] -->

                                <div class="col-sm-6">

                                    <label class="required">Country</label>

                                    <div class="custom_select">

                                        <select name="country">

                                            <option value="USA">India</option>
                                            <option value="Australia">USA</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Canada">Canada</option>

                                        </select>

                                    </div>

                                </div><!--/ [col] -->

                            </li><!--/ .row -->

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="telephone" class="required">Telephone</label>
                                    <input type="text" name="mobile" id="telephone">

                                </div><!--/ [col] -->


                            </li><!--/ .row -->


                            <li class="row">

                                <div class="col-xs-12">

                                    <input type="radio" checked name="" id="radio_1">
                                    <label for="radio_1">Ship to this address</label>

                                </div><!--/ [col] -->

                            </li><!--/ .row -->

                            <li class="row">

                                <div class="col-xs-12">

                                    <input type="radio" name="ship" id="radio_2">
                                    <label for="radio_2">Ship to different address</label>

                                </div>

                            </li><!--/ .row -->

                        </ul>






                        <footer class="bottom_box on_the_sides">

                            <div class="left_side">

                                <input class="button_blue middle_btn" type="submit" value="Save">
                                <button class="button_blue_middle_btn" data-dismiss="close"></button>
                            </div>


                            <div class="right_side">

                                <span class="prompt">Required Fields</span>

                            </div>

                        </footer>

                    </form>
                </div>
            </section>

            <!--/ .section_offset -->

            <div class="col-sm-10">

                <button class="button_blue middle_btn" id="newadd" >ADD NEW ADDRESS</button>
                {{--<input type="button" class="button_blue middle_btn" value="ADD NEW ADDRESS" id="newadd">--}}
                <input class="button_blue middle_btn" type="submit" id="next" value="NEXT">

            </div>





            <!-- - - - - - - - - - - - - - End of billing information - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Shipping information - - - - - - - - - - - - - - - - -->


            <!-- - - - - - - - - - - - - - End of billing information - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Shipping method - - - - - - - - - - - - - - - - -->

        @endif


        <!-- - - - - - - - - - - - - - End of shipping method - - - - - - - - - - - - - - - - -->




        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->




    <script>
        $(document).ready(function(){
            $("#newadd").click(function(){
                $(".addsection").toggle();
                $("#newadd").text('CLOSE');



            });
        });
    </script>
    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection