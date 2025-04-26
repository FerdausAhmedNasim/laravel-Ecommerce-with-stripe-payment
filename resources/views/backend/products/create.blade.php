@extends('backend.app')
@section('content')
 <div class="container">
  <div class="card mt-5">
   <h3 class="card-header p-3">Create New product</h3>
   <div class="card-body">
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
     @csrf
     <div class="mb-3">
      <label for="name"  class="form-label" name="name">Product Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
     </div>
     <div class="mb-3">
       <label for="description" class="form-label">Product Description</label>
       <input type="text" class="form-control" id="description" name="description"  required>
     </div>


     <div class="mb-3">
      <label for="price" class="form-label">Product Price</label>
      <input type="number" class="form-control" id="price" name="price"  required>
     </div>

     <div class="mb-3">
      <label for="image" class="form-label">Product image</label>
      <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
    </div>

     <button class="btn btn-primary">Submit</button>
    </form>
   </div>
  </div>
 </div>
@endsection