@extends('layouts.adminpanel')


@section('content')

    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Edit Products</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Edit Products</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box Content -->
            <!-- ============================================================== -->

            <div class="row">
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            {!! Form::open(['method'=>'post','action'=>'ProductController@store','files'=>true]) !!}
                            {{csrf_field()}}

                            <div class="form-body">
                                <h5 class="card-title">About Product</h5>
                                <hr>
                                <!-- =====product and subtext======================================== -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Product Name</label>
                                            <input value="{{$products->P_name}}" name="P_name"  id="P_name" type="text" class="form-control" placeholder="price" aria-describedby="basic-addon1">

                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/span-->
                                </div>
                                <!-- =====category and subcategory======================= -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Category" class="control-label">Category</label>
                                            <select name="Category" class="form-control" >
                                                <option value="">Select Category</option>
                                                @foreach($categories as $key=>$value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="subcategory_id" class="control-label">Sub Category</label>
                                            <select name="subcategory_id" class="form-control" >
                                                <option value="">Select SubCategory</option>

                                            </select>
                                        </div>
                                    </div>


                                    <!--/span-->
                                </div>

                                <!-- =====cost tax and total cost==================== -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cost Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input name="P_cost_price" value="{{$products->P_cost_price}}"  id="costprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tax</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <select name="P_tax_id" id="costtax" class="form-control">
                                                    <option value="" >Select Tax</option>
                                                    @foreach($taxes as $key=>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total cost Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"  id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input name="P_total_cost" value="{{$products->P_total_cost}}" id="final" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1 " readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->

                                </div>

                                <!-- ===== Mrp and Discount==================== -->
                                <div class="row">


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>MRP</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input  name="P_mrp" value="{{$products->P_mrp}}" id="" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input id="discount" value="{{$products->P_discount_id}}" name="P_discount_id" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->


                                </div>

                                <!-- =====retail tax total retail===================== -->
                                <div class="row">


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Retail Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input name="P_retail_price" value="{{$products->P_retail_price}}" id="retailprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Retail Tax</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <select name="P_retail_tax_id" id="retailtax" class="form-control">
                                                    <option value="" >Select Tax</option>
                                                    @foreach($retailtaxes as $key=>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total Retail Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                </div>
                                                <input name="P_total_retail_price" value="{{$products->P_total_retail_price}}" id="finalretailprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Manufacturing Date</label>
                                            <input name="P_manufacture_date" value="{{$products->P_manufacture_date}}" type="text" id="firstName" class="form-control" placeholder="Y-m-d H : i : s" > </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Expiry Date</label>
                                            <input name="P_expiry_date" value="{{$products->P_expiry_date}}" type="text" id="lastName" class="form-control" placeholder="Y-m-d H : i : s"> </div>
                                    </div>
                                    <!--/span-->
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Quantity</label>
                                            <input name="P_quantity" value="{{$products->P_quantity}}" type="text" id="firstName" class="form-control" placeholder="Enter Quantity"> </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Warranty</label>
                                            <input  name="P_warranty" value="{{$products->P_warranty}}" type="text" id="lastName" class="form-control" placeholder="Enter duration"> </div>
                                    </div>

                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Condition</label>
                                            <input name="P_condition" value="{{$products->P_condition}}" type="text" id="lastName" class="form-control" placeholder="Describe condition"> </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <!--/span-->
                                    <div class="col-md-3">
                                        <h5 class="card-title m-t-20">Upload Image</h5>
                                        <div class="product-img"> <img src="{{URL::to('/')}}/apassets/images/gallery/chair.jpg">
                                            <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                            <br/>

                                            <div class="form-group" >
                                                {!! Form::label('photo_id','Photo:') !!}
                                                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

                                            </div>


                                        </div>

                                    </div>

                                     uploading the image


                                </div>

                                <h5 class="card-title m-t-40">Product Description</h5>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <textarea name="P_description" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="card-title m-t-40">Product Specification</h5>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <textarea name="P_specification" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="P_status" class="control-label">Status</label>
                                            <select name="P_status" class="form-control" >
                                                <option value="">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <br>

                            </div>
                            <div class="form-actions m-t-40"  >
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Submit</button>
                                <button type="button" class="btn btn-dark">Cancel</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="{{URL::to('/')}}/apassets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->

    <!-- =======================for cost price calculation======================================= -->
    <script>
        $(document).ready(function(){
            $("#costprice").on('keyup change',function(){

                var t =  $("#costtax :selected").text();
                var c =   $(this).val();

                var result = parseFloat(c)+parseFloat(t);
                $(".final").val(result);
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $("#costtax").on('keyup change',function(){

                var t =  $("#costtax :selected").text();
                var c =  $("#costprice").val();

                var result = parseFloat(c)+parseFloat(t);
                $("#final").val(result);
            });

        });
    </script>
    <!-- ======================================================== -->
    <!-- =======================for retail price calculation======================================= -->
    <script>
        $(document).ready(function(){
            $("#retailprice").on('keyup change',function(){

                var t =  $("#retailtax :selected").text();
                var c =  $("#retailprice").val();

                var result = parseFloat(c)+parseFloat(t);
                $("#finalretailprice").val(result);
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $("#retailtax").on('keyup change',function(){

                var t =  $("#retailtax :selected").text();
                var c =  $("#retailprice").val();
                var k = $("#discount").val();

                var temp =  parseFloat(c)-((parseFloat(c)*parseFloat(k))/100);

                var result = temp-((temp*parseFloat(t))/100);

                $("#finalretailprice").val(result);
            });

        });
    </script>
    <!-- ======================================================== -->

    <!-- =========================for category and subcategoyr===================================== -->

    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('select[name="Category"]').on('change',function(){
                var CategoryID = jQuery(this).val();
                if(CategoryID)
                {
                    jQuery.ajax({
                        url : {{URL::to('subcategory/getsubcategories/')}}+CategoryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="subcategory_id"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="subcategory_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="subcategory_id"]').empty();
                }
            });
        });
    </script>


@endsection

