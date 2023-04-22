@extends('layouts.admin')
@section('title')
Edit Product | Usina Corurpe
@endsection
@section('contents')


<!-- Page Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Edit Product</h1>
</div>
<hr>
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<!-- Content Row -->
<div class="row">
    <div class="col-md-10 m-auto">
        <!-- DataTales Example -->
        <div class="card bg-light shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit product Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="cat_id"> <b>Item Type <span class="text-danger">*</span></b> </label>
                        <select name="cat_id" class="form-control @error('cat_id') is-invalid @enderror" id="cat_id" required>
                            <option value="{{$product->cat_id}}">
                                {{$product->cat_info->title}}
                            </option>
                            <option value="">=============</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endif
                        </select>
                        <span class="text-danger">
                            @error('cat_id')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="title"> <b>Title<span class="text-danger">*</span></b> </label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$product->title}}" required>
                        <span class="text-danger">
                            @error('title')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description_one" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                        <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required>{{$product->description}}</textarea>
                        <span class="text-danger">
                            @error('description')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>   
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="slug"> <b>Slug</b> </label>
                        <input type="text" name="slug" class="form-control" value="{{$product->slug}}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <br>
                        <img src="{{asset('upload/product/'.$product->image)}}" alt="" height="150px" width="220px">
                    </div>
                    <br>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
