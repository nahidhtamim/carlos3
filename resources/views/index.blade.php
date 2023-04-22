@extends('layouts.front')

@section('title')
Home | Usina Corurpe
@endsection

@section('contents')


<!-- Navbar & Carousel Start -->
<div class="header-carousel position-relative" style=" background: #6CBE03">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('frontend/img/bg1.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Lorem ipsum dolor sit amet.
                </h1>
                <p class="text-white text-uppercase mb-3 animated slideInDown"
                style="font-size: 26px; line-height: 26px;">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('frontend/img/bg2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Lorem ipsum dolor sit amet.
                </h1>
                <p class="text-white text-uppercase mb-3 animated slideInDown"
                style="font-size: 26px; line-height: 26px;">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<!-- Navbar & Carousel End -->


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 100%;">
            <h2 class="fw-bold text-primary">Custom Manufacturing <span class="text-dark">Solutions</span> From
                Start to Finish</h2>
            <h5 class="mb-0">TMP Manufacturing supports clients globally with a depth of expertise across multiple 	sectors</h5>
        </div>
        <div class="row g-5 text-center">
            @foreach ($featured_categories as $solution)
            <div class="col-lg-2 col-md-4 col-6 mx-auto wow zoomIn solutions" data-wow-delay="0.2s">
                <img src="{{asset('upload/solution/'.$solution->image)}}" alt="">
                <h4 class="py-3">{{$solution->title}}</h4>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Features Start -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">We're Providing The Best Solution</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-8 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>100 + Total Products</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>2605 + Satisfied Clients</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>1570 + Projects Completed</h5>
                        </div>
                    </div>
                    {{-- <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div> --}}
                    <a href="{{url('/contact')}}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('frontend/img/about.jpg')}}" style="border-radius: 20px;
                        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                    </div>
                </div>
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


<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary">Supporting the world’s biggest brands</h1>
        </div>
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                @foreach ($partners as $partner)
                <img src="{{asset('upload/partner/'.$partner->image)}}" alt="">
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

<!-- Quote Start -->
{{-- <div class="container-fluid py-5 quote wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp p-2" data-wow-delay="0.6s">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-4 wow zoomIn"
                    data-wow-delay="0.9s">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @elseif(session('warning'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('warning') }}
                    </div>
                    @endif
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <form>
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <h3 class="text-white text-center">Let Us Know About Your Requirements</h3>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select bg-light border-0" style="height: 40px;" name="region">
                                    <option selected>Select A Region *</option>
                                    <option value="UK">UK</option>
                                    <option value="Europe">Europe</option>
                                    <option value="North America">North America</option>
                                    <option value="Middle East">Middle East</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light border-0" name="subject" placeholder="Subject *"
                                    style="height: 40px;">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name*"
                                    style="height: 40px;">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light border-0" name="phone" placeholder="Your Phone *"
                                    style="height: 40px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email"
                                    style="height: 40px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" name="content" rows="1"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    {!! NoCaptcha::renderJs() !!}
                        
                                    {!! NoCaptcha::display() !!}
                                    <span class="text-danger">
                                        @error('g-recaptcha-response')
                                            <p class="alert alert-danger">{{$message}}</p> 
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit Request</button>
                            </div>
                            <div class="col-12">
                                <span class="text-white"> By selecting the "Submit Request" button, your data entered
                                    in the contact form will be collected and processed for the purpose of
                                    responding to your request.</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 wow slideInUp p-2" data-wow-delay="0.6s">
                <div class="image-text-overlay text-top-left"
                    style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                    <div class="texts">
                        <p class="overlay-title text-dark px-4 pt-5">Introducing</p>
                        <h2 class="overlay-title text-primary px-4">Total Metal Products</h2>
                        <p class="text-dark px-4" style="z-index: 100"><b>Established in 2010 Total Metal Products Ltd (TMP) are a sector leading machine design and tool making company, specialising in stretch bending, roll forming and, welding & assembly jigs.</b></p>
                        <img src="{{ asset('frontend/img/product-cropped.gif')}}" alt="" width="100%">
                        <a href="{{url('/page/Total-Metal-Products')}}" class="btn btn-primary py-md-3 px-md-5 me-3 mx-3 animated slideInLeft">Find Out More</a>
                    </div>
                    <div class="overlay-white"></div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
<!-- Quote End -->

@endsection