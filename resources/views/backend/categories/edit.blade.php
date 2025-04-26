@extends('backend.app')
@section('content')
<div class="container">
    <h2>Update Category</h2>

    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

        <div class="form-group">
                        
            <label>Catagory ID</label>
            <input type="text" name="category_id" value="{{ $category->category_id }}" class="form-control">
            <label>Category Name</label>
            <input type="text" name="subcategory_name" value="{{ $category->subcategory_name }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection
