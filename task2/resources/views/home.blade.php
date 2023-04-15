@extends("layouts.app")
@section('title','Home')
@section('content')
<!-- Start carousel -->
<div class="container bg-color">
      <div class="row">
        <div class="col-md-5 mackbook d-flex align-items-center justify-content-center">
            <div class="carousel-text">
                <h2>SARA SOFTWARE</h2>
                <p>We know our clients’ difficulties both within and outside these sectors. We offer strong, logical, and effective ways to deal with those problems.</p>
            </div>
        </div>
        <div class="col-md-2 carousel-bg">

        </div>
        <div class="col-md-5 ">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner-products/sara-team-work.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner-products/why-chosse-us.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner-products/team.jpeg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </div>
</div>
<!-- End carousel -->
    <!-- Start catagories -->
    <div class="container categories">
        <div class="row">
            <div class="col-md-4 ">
                <div class="cat1 d-flex justify-content-between align-items-center">
                   <h1>Watch</h1>
                   <img src="images/categories/watch.png" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="cat2 d-flex justify-content-between align-items-center">
                   <h1>Bag</h1>
                   <img src="images/categories/bag.png" alt="">
                </div>
            </div>
            <div class="col-md-4 ">
               <div class="cat3 d-flex justify-content-between align-items-center">
                   <h1>Shoes</h1>
                   <img src="images/categories/shoes.png" alt="">
               </div>
            </div>
        </div>
    </div>
   
   
    <!-- End catagories -->
<!-- Start Mobile-card section -->
@foreach ($categories as $category)
<div class="container bg-color">
    <div class="row mb-5 pt-3">
        <div class="col-6">
            <h1 class="p-3">{{ $category->category_name }}</h1>
        </div>
        <div class="col-6 text-end pr-3">
            <h5 class="text-warning font-weight-bold">See All</h5>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($category->products as $allPro)
        <div class="col">
            <div class="card card-shadow h-100 card">
                <img class="card-img-top" src="{{ asset('uploads/product/'.$allPro->product_image) }}" class="card-img-top" alt="...">
                {{-- <img src="images/bags/bag-1.png" class="card-img-top" alt="..."> --}}
                <div class="card-body d-flex justify-content-center">
                    <div class="card-inner">
                        <h4 class="card-title">{{ $allPro->product_name }}</h4>
                        <p class="card-text">{{ $allPro->product_desc }}</p>
                        <h4>৳ {{$allPro->product_price  }}</h4>
                        <a href="{{ route('booking',$allPro->id) }}" class="button-style text-decoration-none">Buy Now >>></a>
                    </div>
                </div>

            </div>
        </div>
 
        @endforeach
    </div>
</div>
@endforeach
<!-- End Mobile-card section --> 



<!-- start categories section -->
<div class="container bg-color">
    <div class="categories d-flex justify-content-center">
        <div id="categories-bg">
            <h3 class="categories-border">Categories</h3>
        </div>
    </div>
<div class="row d-flex align-items-center">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="card category-item">
                        <img src="images/Categories/bag.png" class="card-img-top" alt="">
                        <h6 class="text-center">Bag</h6>
                    </div>
            </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center mb-4">
                        <div class="card category-item">
                            <img src="images/Categories/perfume.png" class="img-fluid" alt="">
                            <h6 class="text-center">Beauty</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card category-item">
                            <img src="images/Categories/shoe.png" class="img-fluid" alt="">
                            <h6 class="text-center">Shoes</h6>
                        </div>
                    </div>

                </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex align-items-center">
            <img src="images/Categories/pale-order.png" class="d-block w-100" alt="">
        </div>
    </div>
</div>

</div>

<!-- End categories section -->


@endsection