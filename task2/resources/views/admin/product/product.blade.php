@extends('layouts.admin')
@section('title','Product')
@section('content')
<div class="row">
    <div class="cal-md-8 col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Product</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped text-center">
                    <tr>
                        <th>SL.</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($products as $sl=>$product )
                    <tr>
                        <td>{{ $sl+1}}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->rel_to_category->category_name}}</td>
                        <td>{{ $product->product_price}}</td>
                        <td> <img src="{{ asset('uploads/product/'.$product->product_image)}}" alt=""> </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('product.edit',$product->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('product.delete',$product->id) }}">Delete</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">Data Not Found</td>
                        </tr>
                    @endforelse     
                </table>
            </div>
        </div>
    </div>
    <div class="cal-md-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New Product</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="product">Product</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Enter New product">
                    </div>
                    <div class="mt-3">
                        <label for="Category">Category</label>
                        <select name="category" class="form-control" id="">
                            <option value="" class="disabled">Select Category</option>
                            @foreach ($categories as $category )
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="mt-3">
                        <label for="product">Product Price</label>
                        <input type="text" name="product_price" class="form-control" placeholder="Enter product Price">
                    </div>
                    <div class="mt-3">
                        <label for="product">Product description</label>
                        <textarea name="product_desc" class="form-control" rows="5" placeholder="Enter product description"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="image">Image</label>
                        <input width="100" type="file" class="form-control" name="product_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        <img src="" id="blah" alt="" class="mt-3"width="150">             
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection