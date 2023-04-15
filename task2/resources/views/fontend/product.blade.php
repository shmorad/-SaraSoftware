@extends('layouts.app')
@section('title','Product')
@section('content')


<!-- Start Mobile-card section -->
@foreach ($tests as $test)
<div class="container bg-color">
    <div class="row mb-5 pt-3">
        <div class="col-6">
            <h1 class="p-3">{{ $test->category_name }}</h1>
        </div>
        <div class="col-6 text-end pr-3">
            <h5 class="text-warning font-weight-bold">See All</h5>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($test->products as $allPro)
        <div class="col">
            <div class="card card-shadow h-100 card">
                <img class="w-100 card-img-top" src="{{ asset('uploads/product/'.$allPro->product_image) }}" class="card-img-top" alt="...">
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
    
    
    <!-- End card for beg -->
@endsection