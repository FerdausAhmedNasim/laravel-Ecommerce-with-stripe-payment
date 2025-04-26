@extends('backend.app')
@section('content')
<div class="container">
 <div class="card mt-5">
  <h3 class="card-header p-3">Product Details</h3>
  <div class="card-body">
  <label  class="form-label">Product Name</label>
  <h3>{{$product->name}}</h3> 
  </div>

  <div class="card-body">
   <label  class="form-label">Product Description</label>
   <h3>{{$product->description}}</h3> 
   </div>

   <div class="card-body">
    <label  class="form-label">Product Price</label>
    <h3>{{$product->price}}</h3> 
    </div>

    <div class="card-body">
     <label  class="form-label">Product image</label>
     <h3>{{$product->image}}</h3> 
     </div>
  
 


  <div class="mb-3">
   <div class="card-body">
  <label class="form-label">Product image</label>
   </div>
  <div class="card-body">
  @if($product->image)
  <img src="{{asset('uploads/products/'.$product->image)}}" width="100" height="100" alt="Brand Logo">
  @else
  <p>No logo available</p>
  @endif
 </div>
  <div class="card-body">
  <a href="{{route('products.index')}}" class="btn btn-secondary">Back</a>
 </div>
 </div>
</div>
 </div>

@endsection