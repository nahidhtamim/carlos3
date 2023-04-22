@extends('layouts.admin')
@section('title')
Categories | Usina Corurpe
@endsection
@section('contents')


<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Categories </h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#categoryModal">Add New</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="table-responsive">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif(session('warning'))
            <div class="alert alert-danger" role="alert">
                {{ session('warning') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Feature Status</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->serial}}</td>
                            <td>{{$category->title}}</td>
                            <td><img class="" src="{{asset('upload/category/'.$category->image)}}"
                                alt="" style="width: 150px"></td>
                                <td>
                                    @if ($category->featured == 0)
                                    <b class="text-danger">Not Featured</b>
                                    <a href="{{url('mark-category-featured/'.$category->id)}}" class="btn btn-success btn-sm"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Featured">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </a>
                                    @else
                                    <b class="text-success">Featured</b>
                                    <a href="{{url('unmark-category-featured/'.$category->id)}}" class="btn btn-warning btn-sm"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Un-Mark Featured">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                </td>        
                            <td>
                                @if ($category->status == 0)
                                <b class="text-danger">Inactive</b>
                                <a href="{{url('make-category-active/'.$category->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Active</b>
                                <a href="{{url('make-category-deactive/'.$category->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-category/'.$category->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                    <a href="{{ url('/delete-category/'.$category->id) }}" class="btn btn-danger"><i
                                            class="fa fa-trash-bin"></i> </a></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Add Eco System Modal -->

<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{url('add-category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="serial"> <b>Serial <span class="text-danger">*</span></b> </label>
                        <input type="number" name="serial" class="form-control" placeholder="Enter a serial" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title"> <b>Title <span class="text-danger">*</span></b> </label>
                        <input type="text" name="title" class="form-control" placeholder="Enter a title" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="featured" class="form-label"><b>Featured</b></label>
                            <input type="checkbox" name="featured" class="">
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="status" class="form-label"><b>Status</b></label>
                            <input type="checkbox" name="status" class="">
                        </div>
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