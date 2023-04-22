@extends('layouts.admin')
@section('title')
Images | Usina Corurpe
@endsection
@section('contents')

<style>
    
.img-container {
  position: relative;
}

.image {
  opacity: 1;
  width: 100%;
  transition: .5s ease;
  backface-visibility: hidden;
  border-radius: 10px;
  padding: 10px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.img-container:hover .image {
  opacity: 0.3;
}

.img-container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
<!-- Start -->

<div class="container-fluid pt-4 px-4">
    <div class="row vh-20 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="d-flex align-items-center justify-content-between my-4">
            <h3 class="mb-0">Images </h6>
            <a href="" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#imageModal">Add New</a>
        </div>
    </div>
</div>
<!-- End -->

<div class="container-fluid pt-4 px-4"  style="overflow: hidden !important;">
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

            <div class="row" style="overflow: hidden !important;">
                @foreach ($images as $image)
                <div class="col-lg-2 col-md-3 col-sm-6 m-auto img-container" style="border-radius: 10% !important; overflow: hidden !important;">
                    <img class="card-img-top image" src="{{asset('upload/images/'.$image->image)}}"
                    alt="" width="100%" style="border-radius: 10% !important;">
                    <div class="middle">
                            @if ($image->status == 0)
                            <p class="alert alert-danger">Inactive</p>
                             @else
                            <p class="alert alert-success">Active</p>
                            @endif
                        <div class="btn-group">
                            @if ($image->status == 0)
                            <a href="{{url('make-image-active/'.$image->id)}}" class="btn btn-outline-success"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                             @else
                            <a href="{{url('make-image-deactive/'.$image->id)}}" class="btn btn-outline-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            @endif
                            <a href="{{ url('/edit-image/'.$image->id) }}" class="btn btn-warning"><i
                                    class="fa fa-pen"></i> </a></a>
                            <a href="{{ url('/delete-image/'.$image->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete?')"><i
                                    class="fa fa-trash"></i></a>
                        </div>
                        {{-- <div class="text">John Doe</div> --}}
                    </div>
                </div>
                @endforeach
            </div>
            
            {{-- <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img class="card-img-top" src="{{asset('upload/images/'.$image->image)}}"
                                alt="" style="width: 150px"></td>
                            <td>
                                @if ($image->status == 0)
                                <b class="text-danger">Inactive</b>
                                <a href="{{url('make-image-active/'.$image->id)}}" class="btn btn-success btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Active">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                                @else
                                <b class="text-success">Active</b>
                                <a href="{{url('make-image-deactive/'.$image->id)}}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Inactive">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                @endif
                            </td>    
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/edit-image/'.$image->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i> </a></a>
                                    <a href="{{ url('/delete-image/'.$image->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete?')"><i
                                        class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
</div>


<!-- Add Eco System Modal -->

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Add Item</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form action="{{url('add-image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body" id="images_card">
                        <div id="image_field0">
                            <div class="form-row row border border-1 py-2">
                                <div class="form-group col-12">
                                    <label for="question">Images <span class="text-danger">*</span>
                                    <small>Multiple Images Can Be Uploaded</small>
                                    </label>
                                    <input type="file" name="images[]" id="inputImage" multiple class="form-control @error('images') is-invalid @enderror">
                                    <span class="text-danger">
                                        @error('images')
                                            <p class="text-danger">{{$message}}</p> 
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-success w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection