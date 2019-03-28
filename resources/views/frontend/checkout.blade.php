@extends('layouts.master')

@include('includes.footer')

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
                <li>Checkout</li>

            </ul>

            <h1 class="page_title">Checkout</h1>

            <!-- - - - - - - - - - - - - - Checkout method - - - - - - - - - - - - - - - - -->


@if(count($cart)==0)

<h1>No items in Your Cart</h1>

        @else<!-- - - - - - - - - - - - - - End of checkout method - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Billing information - - - - - - - - - - - - - - - - -->

            <section class="section_offset">

                <h3>Select Shipping Address</h3>

                <div class="theme_box">

                    <div class="row">

                        <div class="col-sm-6">

                            <!-- - - - - - - - - - - - - - Form v1 - - - - - - - - - - - - - - - - -->

                            <form>



                                <div class="form_el" style="margin-bottom:10px;" >
                                    @foreach($address as $addresses)
                                        <div class="theme_box card-body " style="background-color: white">
                                            <input type="radio" name="add" value="{{$addresses->id}}" id="{{$addresses->id}}">
                                            <label for="{{$addresses->id}}">Address:{{$addresses->address}}  <br>
                                                City:{{$addresses->city}} <br> State: {{$addresses->state}} <br> Country:{{$addresses->country}}</label>


                                        </div>
                                        <br>
                                    @endforeach
                                </div>


                            </form>

                            <!-- - - - - - - - - - - - - - End of form v1 - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->



                    </div><!--/ .row -->

                </div><!--/ .theme_box -->

            </section><!--/ .section_offset -->

            <section class="addsection section_offset" style="display:none">

                <h3>Add New Address</h3>

                <div class="theme_box">

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

                    </div>


                    <div class="right_side">

                        <span class="prompt">Required Fields</span>

                    </div>

                </footer>

                    </form>
                </div>
            </section>

            <!--/ .section_offset -->





            <div class="left_side">

                <button class="button_blue middle_btn" id="newadd" >ADD NEW ADDRESS</button>
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


    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('#next').on('click',function(){

                var radio=$("input[name='add']:checked").val();
                if(radio){
               $.ajax({
                       url:'next',
                       method:'post',
                       data:{
                           '_token':$('input[name=_token]').val(),
                           'id':radio,
                       },
                       success:function (response) {
                           window.location.href = "/payment";

                       //    switch to the next page
                           // payment page+6
                       }
                   });


                }
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#newadd").click(function(){
                $(".addsection").show();
                $("#newadd").hide();

            });
        });
    </script>
    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
    @endsection