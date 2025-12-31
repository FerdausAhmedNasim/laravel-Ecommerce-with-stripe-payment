@extends('backend.app')
@section('content')
  <div class="container">
    <h2>Create Category</h2>
    <form action="{{route('categories.store')}}" method="post">
    @csrf
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    <div class="form-group">
      <label for="categories id">Catagory ID</label>
      <input type="text" name="category_id" id="category_id" class="form-control" required>
      <label for="categories">Catagory Name</label>
      <input type="text" name="subcategory_name" id="subcategory_name" class="form-control" required>
      <button type="submit" class="btn btn-primary" mt-3>Create</button>
    </div>
    </form>
  </div>
@endsection