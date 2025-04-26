@extends('backend.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 11</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">Product Table</h3>
            <div class="mt-1 text-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Band</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>Product Image</th>
                            <th width="200px">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        // Load data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}", // Corrected route name
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' 
                //logo show no need controller change  for show logo
                // render: function(data, type, full, meta)
                // {
                //     return '<img src="{{asset("uploads/brands")}}/'+data+'" width="50" height="50" alt="Brand Logo">';
                // }
            },
                { data: 'price', name: 'price' },
                { data: 'image', name: 'image'},
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });

        // Delete
        $(document).on('click', '.delete', function() {
            var id = $(this).data('id');
            if (confirm("Are you sure you want to delete this brand?")) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('products.destroy', '') }}/" + id, // Corrected route name
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        alert(response.success);
                        table.ajax.reload();
                    },
                    error: function(xhr) {
                        alert("Something went wrong!");
                    }
                });
            }
        });
    });
</script>
</html>
@endsection