@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between ">
            <h2>Create category</h2>
            <a title="create product" href="{{ route('categories.create') }}" class="btn  btn-sm btn-info py-2 mb-2"><i class="fas fa-plus"></i></a>
        </div>
       <hr>
        <div class="row mt-4">
           <div class="card">
            <div class="card-body">
               <form action="{{ route("categories.update", $category->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                  <label for="category_name">Category name</label>
                  <input type="text" class="form-control @error('category_name') is-invalid @enderror" value="{{ $category->category_name }}" id="category_name" name="category_name" placeholder="Enter category name">
                  @error('category_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{ route('categories.index') }}" class="btn btn-secondary ml-2">Cancel</a>
               </form>
            </div>
           </div>
        </div>

    </div>
@endsection




