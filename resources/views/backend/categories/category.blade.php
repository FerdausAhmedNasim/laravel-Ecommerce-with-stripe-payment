@extends('backend.app')
@section('content')

    <!DOCTYPE html>
    <html>

    <head>
        <title>Laravel 11 Yajra Datatables Tutorial</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


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
                <h3 class="card-header p-3">Category Table</h3>
                <div class="mt-1 text-end">
                    <a class="btn btn-success btn-sm" href="{{route('categories.create')}}">Create New Category</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category id </th>
                                <th>Subcategory Name </th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    <script>
        $(document).ready(function () {
            // DataTable লোড করা
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('categories.index') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'category_id', name: 'category_id' },
                    { data: 'subcategory_name', name: 'subcategory_name' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });


            //✅ Delete Button Click (AJAX)
            $(document).on('click', '.delete', function () {
                var id = $(this).data('id');
                if (confirm("Are you sure you want to delete this category?")) {
                    $.ajax({
                        type: "DELETE",
                        url: "categories/" + id,
                        data: {
                            _token: "{{ csrf_token() }}" // CSRF টোকেন লাগবে
                        },
                        success: function (response) {
                            alert(response.success);
                            table.ajax.reload(); // টেবিল রিফ্রেশ হবে
                        },
                        error: function (xhr) {
                            alert("Something went wrong!");
                        }
                    });
                }
            });

        });
    </script>

    </html>

@endsection