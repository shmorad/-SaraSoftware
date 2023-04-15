@extends('layouts.admin')
@section('title','Category')
@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Category List</h3>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>

                @endif
                <table class="table table-striped">
                    <tr>
                        <th>SL.</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $sl=>$category )  
                    <tr>
                        <td>{{ $sl+1 }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td><img src="{{ asset('uploads/category/'.$category->category_image) }}" alt=""></td>
                        <td>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item d-flex align-items-center" href="{{ route('category.edit',$category->id) }}"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                                  <a class="dropdown-item d-flex align-items-center" href="{{ route('category.delete',$category->id) }}"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                                </div>
                              </div>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>    
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-body">
                
                <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="name">Category</label>
                            <input id="name" class="form-control" name="category_name" type="text" value="{{ old('category_name') }}">
                            @error('category_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" class="form-control" name="category_image" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img src="" id="blah" alt="" class="mt-2"width="150">
                            @error('category_image')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection