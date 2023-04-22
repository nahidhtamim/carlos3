<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background-color: #6CBE03;">
        <a href="{{url('/')}}" class="navbar-brand p-0">
            <div class="row">
                <div class="col-12 m-0 p-0">
                    <img class="navbar-logo" src="{{ asset('frontend/img/logo.png')}}" alt="" width=""> 
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Products</a>
                    <div class="dropdown-menu m-0">
                        @foreach($categories as $category)
                        <a href="{{url('/category-products/'.$category->id)}}" class="dropdown-item">{{$category->title}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services</a>
                    <div class="dropdown-menu m-0">
                        @foreach($services as $service)
                        <a href="{{url('/our-services/'.$service->slug)}}" class="dropdown-item">{{$service->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About & Others</a>
                    <div class="dropdown-menu m-0">
                        @foreach($pages as $page)
                        <a href="{{url('/page/'.$page->slug)}}" class="dropdown-item">{{$page->name}}</a>
                        @endforeach
                        <a href="{{url('/blogs')}}" class="dropdown-item">News / Blog</a>
                    </div>
                </div>
            </div>
            <a href="{{url('/contact')}}" class="btn btn-light py-2 px-4 ms-3">Contact</a>
        </div>
    </nav>
</div>
<!-- Navbar & Carousel End -->