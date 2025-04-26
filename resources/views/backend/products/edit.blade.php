@extends('backend.app')
@section('content')
 <div class="container">
  <div class="card mt-5">
   <h3 class="card-header p-3">Edit Band</h3>
   <div class="card-body">
    <form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="mb-3">
      <label for="name"  class="form-label" name="name">Product Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
     </div>


     <div class="mb-3">
      <label for="description"  class="form-label" name="description">Product Description</label>
      <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
     </div>

     <div class="mb-3">
      <label for="price"  class="form-label" name="price">Product Price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
     </div>
     

     <div class="mb-3">
       <label for="image" class="form-label">Product image</label>
       <input type="file" class="form-control" id="image" name="image" accept="image/*" >
       @if($product->image)
       <img src="{{asset('uploads/products/'.$product->image)}}" width="100" height="100"   alt="image">
       @endif
     </div>
     <button class="btn btn-primary">Update</button>
    </form>
   </div>
  </div>
 </div>
@endsection