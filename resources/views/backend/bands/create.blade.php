@extends('backend.app')
@section('content')
 <div class="container">
  <div class="card mt-5">
   <h3 class="card-header p-3">Create New Band</h3>
   <div class="card-body">
    <form action="{{route('bands.store')}}" method="post" enctype="multipart/form-data">
     @csrf
     <div class="mb-3">
      <label for="brand_name"  class="form-label" name="brand_name">Brand Name</label>
      <input type="text" class="form-control" id="brand_name" name="brand_name" required>
     </div>
     <div class="mb-3">
       <label for="brand_logo" class="form-label">Brand log</label>
       <input type="file" class="form-control" id="brand_logo" name="brand_logo" accept="image/*" required>
     </div>
     <button class="btn btn-primary">Submit</button>
    </form>
   </div>
  </div>
 </div>
@endsection