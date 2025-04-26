@extends('backend.app')
@section('content')
<div class="container">
 <div class="card mt-5">
  <h3 class="card-header p-3">Brand Details</h3>
  <div class="card-body">
  <label  class="form-label">Brand Name</label>
  <h1 style="background-color:red">{{$band->brand_name}}</h1> 
  </div>
  <div class="mb-3">
   <div class="card-body">
  <label class="form-label">Brand Logo</label>
   </div>
  <div class="card-body">
  @if($band->brand_logo)
  <img src="{{asset('uploads/brands/'.$band->brand_logo)}}" width="100" height="100" alt="Brand Logo">
  @else
  <p>No logo available</p>
  @endif
 </div>
  <div class="card-body">
  <a href="{{route('bands.index')}}" class="btn btn-secondary">Back</a>
 </div>
 </div>
</div>
 </div>

@endsection