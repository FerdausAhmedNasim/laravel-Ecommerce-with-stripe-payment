<!DOCTYPE html>

<html>

<head>

    <title>Laravel Add To Cart </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

  

<div class="container">

    <div class="row">

        <div class="col-lg-12 col-sm-12 col-12 main-section">

            <div class="dropdown">

                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ array_sum(array_column((array) session('cart'), 'quantity')) }}
                    </span>
                </button>

                

            </div>

        </div>

    </div>

</div>

  

<br/>

<div class="container">

  

    @if(session('success'))

        <div class="alert alert-success">

          {{ session('success') }}

        </div> 

    @endif

  

    @yield('content')

</div>

  

@yield('scripts')

     

</body>

</html>