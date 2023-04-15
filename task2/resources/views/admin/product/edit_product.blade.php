@extends('layouts.admin')
@section('title','Edit Product')
@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="product">Product</label>
                            <input type="text" name="product_name" class="form-control" value="{{ $product_info->product_name }}">
                        </div>
                        <div class="mt-3">
                            <label for="category">Category</label>
                            <select name="category" class="form-control" id="">
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id }}" {{$product_info->category_id == $category->id?'selected':'' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="mt-3">
                            <label for="product">Product Price</label>
                            <input type="text" name="product_price" class="form-control" placeholder="Enter product Price" value="{{ $product_info->product_price }}">
                        </div>
                        <div class="mt-3">
                            <label for="product">Product description</label>
                            <textarea name="product_desc" class="form-control" rows="5" placeholder="Enter product description">{{ $product_info->product_desc }}</textarea>
                        </div>
                        <div class="mt-3">
                            <label for="image">Image</label>
                            <input width="100" type="file" class="form-control" name="product_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img src="{{ asset('uploads/product/'.$product_info->product_image)}}" id="blah" alt="" class="mt-3"width="150">             
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product_info->id }}">
                        <button type="submit" class="btn btn-primary mt-3">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection