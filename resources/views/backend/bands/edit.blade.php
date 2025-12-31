@extends('backend.app')
@section('content')
 <div class="container">
  <div class="card mt-5">
   <h3 class="card-header p-3">Edit Band</h3>
   <div class="card-body">
    <form action="{{route('bands.update', $band->id)}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="mb-3">
      <label for="brand_name"  class="form-label" name="brand_name">Brand Name</label>
      <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{$band->brand_name}}">
     </div>
     <div class="mb-3">
       <label for="brand_logo" class="form-label">Brand log</label>
       <input type="file" class="form-control" id="brand_logo" name="brand_logo" accept="image/*" >
       @if($band->brand_logo)
       <img src="{{asset('uploads/brands/'.$band->brand_logo)}}" width="50" height="50"   alt="Brand Logo">
       @endif
     </div>
     <button class="btn btn-primary">Update</button>
    </form>
   </div>
  </div>
 </div>
@endsection