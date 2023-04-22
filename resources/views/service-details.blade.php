@extends('layouts.front')

@section('title')
{{$service->name}} | Usina Corurpe
@endsection

@section('contents')

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{$service->name}}</h1>
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
                <p class="mb-4">{!! $service->description_one !!}</p>
            </div>
            <div class="col-lg-5 m-auto">
                <div class="position-relative h-100">
                    <img class="img-fluid rounded wow zoomIn cover-image" data-wow-delay="0.9s"
                        src="{{ asset('upload/service/'.$service->image)}}" style="object-fit: cover; border-radius: 20px !important; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                </div>
            </div>
            @if($service->description_two != null)
            <div class="col-lg-10 m-auto">
                <p class="mb-4">{!! $service->description_two !!}</p>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- About End -->

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">Latest Blogs / News</h1>
        </div>
        <div class="row g-5 py-5">
            @foreach($featured_blogs as $blog)
            <div class="col-lg-4 wow slideInUp my-4 mx-auto" data-wow-delay="0.3s" style="height: 100%; ">
                <div class="blog-item bg-light rounded overflow-hidden" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; min-height: 540px;">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('upload/blog/'.$blog->image)}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                            href="">{{$blog->name}}</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">{{$blog->name}}</h4>
                        <p>{!! substr($blog->description_one, 0, 150)."......" !!}</p>
                        <a class="text-uppercase" href="{{url('/blog-details/'.$blog->slug)}}">Learn More<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Start -->


@endsection