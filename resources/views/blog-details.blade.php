@extends('layouts.front')

@section('title')
{{$blog->name}} | Usina Corurpe
@endsection

@section('contents')

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{$blog->name}}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-10 m-auto">
                <p class="mb-4">{!! $blog->description_one !!}</p>
            </div>
            <div class="col-lg-5 m-auto">
                <div class="position-relative h-100">
                    <img class="img-fluid rounded wow zoomIn cover-image" data-wow-delay="0.9s"
                        src="{{ asset('upload/blog/'.$blog->image)}}" style="object-fit: cover; border-radius: 20px !important; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                </div>
            </div>
            @if($blog->description_two != null)
            <div class="col-lg-10 m-auto">
                <p class="mb-4">{!! $blog->description_two !!}</p>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- About End -->


@endsection