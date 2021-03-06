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
                    <h4 class="page-title">Product</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Product</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                                <form method="post" enctype="multipart/form-data" action="/admin/products/{{$id}}">
                                    @csrf
                                    @method('patch')
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name" name="name" placeholder="Product Name">
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
                                                <input type="text" class="form-control @error('unit') is-invalid @enderror" id="name" wire:model="unit" name="unit" placeholder="Product Unit">
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
                                                <input type="text" class="form-control @error('adress') is-invalid @enderror" wire:model="address" name="address" placeholder="Product Name">
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
                                                <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model="price" name="price" placeholder="Product Price">
                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4" class="col-form-label">Type</label>
                                            <input type="text" class="form-control @error('type') is-invalid @enderror" wire:model="type" name="type" placeholder="Product Type">
                                            @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">AC</label>
                                            <input type="number" class="form-control @error('ac') is-invalid @enderror" wire:model="ac" name="ac" placeholder="Product Ac">
                                            @error('ac')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Bedroom</label>
                                            <input type="number" class="form-control @error('bedroom') is-invalid @enderror" wire:model="bedroom" name="bedroom" placeholder="Product Bedroom">
                                            @error('bedroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4" class="col-form-label">Bathroom</label>
                                            <input type="number" class="form-control @error('bathroom') is-invalid @enderror" wire:model="bathroom" name="bathroom" placeholder="Product Bathroom">
                                            @error('bathroom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="inputPassword4" class="col-form-label">Room Video</label>
                                            <input type="text" class="form-control @error('room_video') is-invalid @enderror" wire:model="room_video" name="room_video" placeholder="Product Bedroom">
                                            @error('room_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="inputPassword4" class="col-form-label">Survey Video</label>
                                            <input type="text" class="form-control @error('survey_video') is-invalid @enderror" wire:model="survey_video" name="survey_video" placeholder="Product Bathroom">
                                            @error('survey_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="inputPassword4" class="col-form-label">Commission</label>
                                        <input type="number" class="form-control @error('commission') is-invalid @enderror" wire:model="commission" name="commission">
                                            @error('commission')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <div style="width: 60px; height: 60px">
                                                <img src="{{url($photo)}}" alt="" srcset="" style="width: 100%; height: 100%; object-fit: cover">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Photo</label>
                                                <input type="file" name="photo" />
                                                @error('photo')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div style="width: 60px; height: 60px">
                                                <img src="{{url($frontView)}}" alt="" srcset="" style="width: 100%; height: 100%; object-fit: cover">
                                            </div>
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
                                                <div style="width: 60px; height: 60px">
                                                    <img src="{{url($firstFloor)}}" alt="" srcset="" style="width: 100%; height: 100%; object-fit: cover">
                                                </div>
                                                <label class="form-label" for="exampleInputEmail1">First Floor</label>
                                                <input type="file" name="first_floor" />
                                                @error('first_floor')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group">
                                                <div style="width: 60px; height: 60px">
                                                    <img src="{{url($secondFloor)}}" alt="" srcset="" style="width: 100%; height: 100%; object-fit: cover">
                                                </div>
                                                <label class="form-label" for="exampleInputEmail1">Second Floor</label>
                                                <input type="file" name="second_floor" />
                                                @error('second_floor')
                                                <p style="color: red">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <a href="{{url($pdf)}}" download>File link</a>
                                        <label class="form-label" for="pdf">PDF</label>
                                        <input type="file" name="pdf" id="pdf">
                                        @error('pdf')
                                            <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" name="description" rows="4" placeholder="Product Description"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Show Status</label>
                                        <select wire:model="show_status" class="form-control" name="show_status" id="">

                                            @if ($show_status == "0")
                                            <option value="0" selected>False</option>
                                            <option value="1">True</option>
                                            @else
                                            <option value="0">False</option>
                                            <option value="1" selected>True</option>
                                            @endif
                                        </select>

                                        {{-- <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" name="description" rows="4" placeholder="Product Description"></textarea> --}}
                                        @error('show_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary ">Update</button>
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
<script src="{{url('/assets/plugins/fileuploads/js/dropify.js')}}" defer></script>
{{-- /home/fark/prima/public --}}
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