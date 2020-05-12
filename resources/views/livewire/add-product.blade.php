<div class="page app sidebar-mini">
    <div class="page-main">
        <!--App-Header-->
        @include('layouts.header')
        <!--/App-Header-->

        @include('layouts.sidebar')

        <!--App-Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">

                <!-- Page-Header-->
                <div class="page-header">
                    <h4 class="page-title">Agent</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Agent</li>
                        <li class="breadcrumb-item active" aria-current="page">Agent List</li>
                    </ol>
                </div>
                <!-- /Page-Header-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-b-20">
                            <div class="card-header">
                                <h3 class="card-title">Form Add Product</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data" action="/admin/products">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" name="name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Unit Business</label>
                                            <input type="text" class="form-control @error('unit') is-invalid @enderror" id="name" value="{{old('unit')}}" name="unit">
                                                @error('unit')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                            <input type="text" class="form-control @error('adress') is-invalid @enderror" value="{{old('address')}}" name="address">
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="price">Price</label>
                                            <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" name="price">
                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4" class="col-form-label">Type</label>
                                        <input type="text" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}" name="type">
                                            @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">AC</label>
                                        <input type="number" class="form-control @error('ac') is-invalid @enderror" value="{{old('ac')}}" name="ac">
                                            @error('ac')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Bedroom</label>
                                            <input type="number" class="form-control @error('bedroom') is-invalid @enderror" value="{{old('bedroom')}}" name="bedroom">
                                            @error('bedroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Bathroom</label>
                                        <input type="number" class="form-control @error('bathroom') is-invalid @enderror" value="{{old('bathroom')}}" name="bathroom">
                                            @error('bathroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="inputPassword4" class="col-form-label">Room Video</label>
                                        <input type="text" class="form-control @error('room_video') is-invalid @enderror" value="{{old('room_video')}}" name="room_video">
                                            @error('room_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="inputPassword4" class="col-form-label">Survey Video</label>
                                        <input type="text" class="form-control @error('survey_video') is-invalid @enderror" value="{{old('survey_video')}}" name="survey_video">
                                            @error('survey_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="inputPassword4" class="col-form-label">Commission</label>
                                        <input type="number" class="form-control @error('commission') is-invalid @enderror" value="{{old('commission')}}" name="commission">
                                            @error('commission')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Photo</label>
                                                <input type="file" name="photo" />
                                                @error('photo')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Front View</label>
                                                <input type="file" name="front_view" />
                                                @error('front_view')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">First Floor</label>
                                                <input type="file" name="first_floor" />
                                                @error('first_floor')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Second Floor</label>
                                                <input type="file" name="second_floor" />
                                                @error('second_floor')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="pdf">PDF</label>
                                        <input type="file" name="pdf" id="pdf">
                                        @error('pdf')
                                            <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4">{{old('description')}}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary ">Add Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2020 Investasi Prima. Support by <a href="https://primaitech.com" class="fs-14">PrimaITech</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer-->

    </div>
</div>

<script src="{{url('/assets/js/vendors/jquery-3.2.1.min.js')}}" defer></script>

<!-- Bootstrap js -->
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}" defer></script>

<!-- Fullside-menu Js-->
<script src="{{url('/assets/plugins/toggle-sidebar/sidemenu.js')}}" defer></script>

<!-- Data tables -->
<script src="{{url('/assets/plugins/datatable/jquery.dataTables.min.js')}}" defer></script>
<script src="{{url('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}" defer></script>
<script src="{{url('/assets/js/datatable.js')}}" defer></script>

<!-- Custom Js-->
<script src="{{url('/assets/js/admin-custom.js')}}" defer></script>