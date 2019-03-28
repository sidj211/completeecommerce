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
                    <h4 class="text-themecolor">Blank Page</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Banners</li>
                        </ol>

                        <button type="button" data-toggle="modal" data-target="#example" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" style="max-width: 800px;" role="document">
                                <div class="modal-content"  >
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body"><!-- Column -->
                                        <div class="modal-body">
                                            <div class="col-lg-12">



                                                {!! Form::open(['method'=>'post','action'=>'BannerController@store','files'=>true]) !!}
                                                {{csrf_field()}}

                                                <div class="row">


                                                    <div class="form-group  has-success col-md-6 ">

                                                        <label style="float:left;margin-left: 12px;" for="inputHorizontalSuccess" class="col-form-label">Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="title" class="form-control " id="inputHorizontalSuccess" placeholder="Enter Title:">
                                                        </div>

                                                    </div>
                                                    <div class="form-group  has-success col-md-6 ">

                                                        <label style="float:left;margin-left: 12px;" for="inputHorizontalSuccess" class="col-form-label">Primary Content</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="content1" class="form-control " id="inputHorizontalSuccess" placeholder="Enter Content">
                                                        </div>
                                                    </div>

                                                    <div class="form-group  has-success col-md-6 ">

                                                        <label style="float:left;margin-left: 12px;" for="inputHorizontalSuccess" class="col-form-label">Secondary Content</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="content2" class="form-control " id="inputHorizontalSuccess" placeholder="Enter Content">
                                                        </div>
                                                    </div>

                                                    <div class="form-group  has-success col-md-6 ">

                                                        <label style="float:left;margin-left: 12px;" for="inputHorizontalSuccess" class="col-form-label">Button Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="button" class="form-control " id="inputHorizontalSuccess" placeholder="Enter Button Name">
                                                        </div>
                                                    </div>



                                                    <div class="form-group  has-success col-md-6 ">

                                                        <label style="float:left;margin-left: 12px;" for="inputHorizontalSuccess" class="col-form-label">Path</label>
                                                        <div class="col-sm-10">
                                                            <input id="path" type="text" name="path" class="form-control " id="inputHorizontalSuccess" placeholder="path" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Category" class="control-label" style="float: left;"  >Category</label>
                                                            <select name="Category" class="form-control" >
                                                                <option value="">Select Category</option>
                                                                 @foreach($categories as $key=>$value)
                                                                     <option value="{{$key}}">{{$value}}</option>
                                                                 @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group  has-success col-md-6 ">



                                                        <label style="float:left;margin-left: 12px;" for="inputHorizontalSuccess" class="col-form-label">Photo</label>
                                                        <div class="col-sm-10" >

                                                            {!! Form::file('file',null,['class'=>'form-control']) !!}
                                                        </div>

                                                        <br>
                                                        <br>
                                                        <button type="submit" style="float: left;margin-left: 9px;" class="btn waves-effect waves-light btn-rounded btn-outline-success">Add Banner</button>
                                                    </div>
                                                </div>



                                                {!! Form::close() !!}


                                            </div>
                                            <!-- Column -->

                                        </div>
                                        <!-- Column -->

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="col-lg-12">

                                <div class="table-responsive">
                                    <table class="table color-table success-table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Content 1</th>
                                            <th>Content 2</th>
                                            <th>photo</th>
                                            <th>Path</th>
                                            <th>Button Name</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($banners as $banner)

                                            <tr>

                                                <td>{{$banner->id}}</td>
                                                <td>{{$banner->title}}</td>
                                                <td>{{$banner->content1}}</td>
                                                <td>{{$banner->content2}}</td>
                                                <td><img src="/images/{{$banner->file}}" height="80" ></td>
                                                <td>{{$banner->path}}</td>
                                                <td>{{$banner->button}}</td>
                                                <td>{{$banner->created_at}}</td>
                                                <td>{{$banner->updated_at}}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{route('products.edit',$banner->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
    <!-- ============================================================== -->

    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('select[name="Category"]').on('change',function(){
                var CategoryID = jQuery(this).val();
                if(CategoryID)
                {
                    var result = '/category/getproducts/'+CategoryID;
                    jQuery('#path').val(result);
                }
                else
                {

                }
            });
        });
    </script>


@endsection