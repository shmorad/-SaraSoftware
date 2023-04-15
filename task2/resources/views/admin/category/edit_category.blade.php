@extends('layouts.admin')
@section('title','Edit Category')

@section('content')
<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Category Edit</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('category.update') }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="name">Category</label>
                            <input id="name" class="form-control" name="category_name" type="text" value="{{ $category_id->category_name }}">
                            @error('category_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" class="form-control" name="category_image" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img src="{{ asset('uploads/category/'.$category_id->category_image) }}" id="blah" alt="" class="mt-2"width="150">
                            @error('category_image')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        </div>
                        <input class="btn btn-primary" type="submit" value="Update">
                    </fieldset>
                    <input type="hidden" value="{{ $category_id->id }}" name="category_id" id="">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection